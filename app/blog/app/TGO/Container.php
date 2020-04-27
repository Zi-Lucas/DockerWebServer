<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-14
 * Time: 10:47
 */

namespace APP\TGO;


class Container
{
    protected static $bindings;

    public static function bind(string $abstract, Closure $concrete)
    {
        static::$bindings[$abstract] = $concrete;
    }

    public static function make(string $abstract)
    {
        return call_user_func(static::$bindings[$abstract]);
    }
}
