<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-09
 * Time: 15:50
 */

// 载入Loader类
require 'Loader.php';
require 'Container.php';
// 注册自动加载
\Loader::register();

\Container::bind();

