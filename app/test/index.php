<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-09
 * Time: 15:33
 */

/**
 * 闭包的使用IOC
 * Class Container
 */
//class Container
//{
//    protected static $bindings;
//
//    public static function bind(string $abstract, Closure $concrete)
//    {
//        static::$bindings[$abstract] = $concrete;
//    }
//
//    public static function make(string $abstract)
//    {
//        return call_user_func(static::$bindings[$abstract]);
//    }
//}
//
//class talk
//{
//    public function greet($target)
//    {
//        echo "Hello " . $target->getName();
//    }
//}
//
//class say
//{
//    public function getName()
//    {
//        return "World\n";
//    }
//}
//
//$talk = new talk();
//
//Container::bind('foo', function () {
//    return new say();
//});
//
//$talk->greet(Container::make('foo'));


//依赖没有倒置
//class Controller
//{
//    protected $service;
//
//    public function __construct()
//    {
//        // 主动创建依赖
//        $this->service = new Service();
//    }
//}
//
//class Service
//{
//    protected $model;
//
//    public function __construct($param1, $param2)
//    {
//        // 主动创建依赖
//        $this->model = new Model('test_table',);
//    }
//}
//
//class Model
//{
//    protected $table;
//    public function __construct($table)
//    {
//        $this->table = $table;
//    }
//}
//
//$controller = new Controller;

class Container
{
    protected static $_singleton = [];
    protected $bindings;

    public function __construct()
    {

    }

    // 添加一个实例到单例
    public static function singleton($instance)
    {
        if ( ! is_object($instance)) {
            throw new InvalidArgumentException("Object need!");
        }
        $class_name = get_class($instance);
        // singleton not exist, create
        if ( ! array_key_exists($class_name, self::$_singleton)) {
            self::$_singleton[$class_name] = $instance;
        }
    }
    // 获取一个单例实例
    public static function getSingleton($class_name)
    {
        return array_key_exists($class_name, self::$_singleton) ?
            self::$_singleton[$class_name] : NULL;
    }
    // 销毁一个单例实例
    public static function unsetSingleton($class_name)
    {
        self::$_singleton[$class_name] = NULL;
    }

    public function getInstance($class_name, $params = [])
    {
        if ($class_name instanceof Closure) {
            return $class_name($this, $params);
        }
        // 获取反射实例
        $reflector = new ReflectionClass($class_name);
        // 获取反射实例的构造方法
        $constructor = $reflector->getConstructor();
        // 获取反射实例构造方法的形参
        $di_params = [];
        if ($constructor) {
            foreach ($constructor->getParameters() as $param) {
                $class = $param->getClass();
                if ($class) {
                    // 如果依赖是单例，则直接获取
                    $singleton = self::getSingleton($class->name);
                    $di_params[] = $singleton ? $singleton : self::getInstance($class->name);
                }
            }
        }

        $di_params = array_merge($di_params, $params);
        // 创建实例
        return $reflector->newInstanceArgs($di_params);
    }

    public static function run($class_name, $method, $params = [])
    {
        if ( ! class_exists($class_name)) {
            throw new BadMethodCallException("Class $class_name is not found!");
        }

        if ( ! method_exists($class_name, $method)) {
            throw new BadMethodCallException("undefined method $method in $class_name !");
        }
        // 获取实例
        $instance = self::getInstance($class_name);

        // 获取反射实例
        $reflector = new ReflectionClass($class_name);
        // 获取方法
        $reflectorMethod = $reflector->getMethod($method);
        // 查找方法的参数
        $di_params = [];
        foreach ($reflectorMethod->getParameters() as $param) {
            $class = $param->getClass();
            if ($class) {
                $singleton = self::getSingleton($class->name);
                $di_params[] = $singleton ? $singleton : self::getInstance($class->name);
            }
        }

        // 运行方法
        return call_user_func_array([$instance, $method], array_merge($di_params, $params));
    }

    public function bind(string $abstract, Closure $concrete)
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function make(string $abstract)
    {
        return call_user_func($this->bindings[$abstract]);
    }
}

class Controller
{
    protected $service;
    // 依赖被动传入。申明要 Service 类的实例 (抽象接口)
    public function __construct(Closure $concrete)
    {
        $this->service = $concrete;
    }

    public function myOrder($uid)
    {
        echo $this->service->getInfo($uid);
    }
}

class Service
{
    protected $model;

    public function __construct(Closure $concrete)
    {
        $this->model = $concrete;
    }

    public function getInfo($uid)
    {
        print_r($this->model);die;
        return $this->model->getInfo($uid);
    }
}

class Model
{
    protected $table;

    public function select($where){
        return "select * from ".$this->table." where $where";
    }
}
class UserModel extends Model
{
    protected $table = 'User';

    public function getInfo($uid)
    {
        return $this->select("id=$uid");
    }
}
class OrderModel extends Model
{
    protected $table = 'Order';

    public function getInfo($uid)
    {
        return $this->select("id=$uid");
    }
}

$result = Container::run(Controller::class, 'myOrder',[1],[function(){
    return new Service(function (){return new UserModel();});
}]);

