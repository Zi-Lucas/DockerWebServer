<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-03-12
 * Time: 20:36
 */
//能使用闭包尽量使用
$numberPlusOne = array_map(function($number) {
    return $number + 1;
}, [1, 2, 3]);
print_r($numberPlusOne);

echo "<br>";
#preg_replace_callback("/{([^\}\{\n]*)}/", [$this, 'select'], $source);//某类中使用的方法
//$source = 'jh2ffa3sf4fa';
$source = "April fools day is 04/01/2002\n";
$source.= "Last christmas was 12/24/2001\n";
preg_replace_callback("|(\d{2}/\d{2}/)(\d{4})|",function ($matches){
    #$matches[0]是完全匹配；
    #$matches[1]是第一个捕获子组的匹配，如(\d{2}/\d{2}/)；
    #以此类推
    return $matches[1].($matches[2]+1);
}, $source);
print_r($source);



#使用use 关键字把变量附加到闭包上时，
#附加的变量会记住附加时赋给他的值。
function enclosePerson($name)
{
    return function ($doCommand) use ($name) {
        return sprintf('%s, %s', $name, $doCommand);
    };
}

$clay = enclosePerson('Clay');

// 一个基本的购物车，包括一些已经添加的商品和每种商品的数量。

// 其中有一个方法用来计算购物车中所有商品的总价格。该方法使用了一个closure作为回调函数。

class Cart{

    const PRICE_BUTTER  = 1.00;
    const PRICE_MILK    = 3.00;
    const PRICE_EGGS    = 6.95;

    protected  $products = array();

    public function add($product,$quantity){
        $this->products[$product] =$quantity;
    }

    public function getQuantity($product){
        returnisset($this->products[$product]) ?$this->products[$product] :
        FALSE;
    }

    public function getTotal($tax){
        $total= 0.00;
        array_walk($this->products,function($quantity,$product) use ($tax, &$total){
            $pricePerItem= constant(__CLASS__. "::PRICE_" .strtoupper($product));
            $total+= ($pricePerItem* $quantity) * ($tax+ 1.0);
        });
        return round($total, 2);
    }

}
$my_cart= new Cart;

// 往购物车里添加条目
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);
// 打出出总价格，其中有 5% 的销售税.
print $my_cart->getTotal(0.05) . "\n";

function html ($code , $id="",$class=""){

    if ($id !== "") $id= " id = \"$id\"" ;
    $class = ($class !== "")? " class =\"$class\"":">";
    $open = "<$code$id$class";
    $close = "</$code>";
    return function ($inner= "")use ($open,$close){
        return "$open$inner$close"."<br>";
    };
}

echo html('div','name','name')('<b>I am Closure</b>');