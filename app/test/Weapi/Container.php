<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-09
 * Time: 16:33
 */
namespace weapi;

class Container
{
    public static function bind()
    {
        echo "bind";
    }

    public static function make()
    {
        echo "make";
    }
}