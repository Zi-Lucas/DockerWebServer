<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-03-06
 * Time: 15:31
 */
function iHaveError($object){
    return $object->iDontExist();
}

try {
    iHaveError(null);
} catch(Error $e){
    echo $e->getMessage();
}
echo "I am still running!\n";

$_POST['name'] = "hedongji";
$name = isset($_POST['name'])?$_POST['name']:null;
echo $name."\n";
$name = $_POST['name']??null;
echo $name."\n";

$a = 1;$b=2;
echo $a<=>$b;//第一操作数大返回1，第二操作数大返回-1，相等返回0

//统一变量语法，有左至右解析
$first = ['name'=>'second'];
$second = "Howdy";
//echo $$first['name'];//在PHP5.X版本中可以顺利执行，在PHP7会产生Notice错误
echo ${$first['name']};//

//常量数组
const STORES = ['en','fr','ar'];
define('STORES',['en','fr','ar']);

//Session_start函数中的选项数组
//session_start([
//   'cookie_lifetime' => 3600,
//   'read_and_close' => true
//]);