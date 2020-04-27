<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-03-12
 * Time: 13:45
 */
class user {

    const A = 1;
    static public $B = 2;
    static $C = 3;
    private $D = 4;
    public $E = 5;

    public $name = "user";
    static $nyname="user";

    public function E(){
        echo "public".$this->D.$this->C;
    }

    static public function B(){
        echo "static public";
    }

    public static function B2(){
        echo "public static";
    }

    private function D(){
        echo "private";
    }

    static public function newSelf(){
        return new self;
    }
    static public function newStatic(){
        return new static();
    }

    public function setName(string $name){
        self::$nyname = $name;
    }
    public function getName():string {
        return self::$nyname;
    }
}
class user2 extends user{
    public $name = "user2";
    static $nyname="user2";
}

$u  = new user();
$u->setName("HDJ");
echo $u->getName();

$u2  = new user();
echo $u2->getName();
throw new \RuntimeException('Please set provider first.');
//$u = user::newStatic();
//
//$u2 = user2::newStatic();
//echo $u::$nyname;
//echo $u2::$nyname;
