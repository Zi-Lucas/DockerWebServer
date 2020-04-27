<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-03-06
 * Time: 09:50
 */
/*function __autoload($class){
    $classpath = $class.".php";
    $classpath = str_replace('\\', DIRECTORY_SEPARATOR, $classpath);
    if(file_exists($classpath)){
        require_once($classpath);
    }else{
        echo 'class file'.$classpath.' not found!';
    }
}*/

function autoload($class){
    $classpath = $class.".php";
    $classpath = str_replace('\\', DIRECTORY_SEPARATOR, $classpath);
    if(file_exists($classpath)){
        require_once($classpath);
    }else{
        echo 'class file'.$classpath.' not found!';
    }
}
spl_autoload_register("autoload");


/*use Publishers\Packt\Book;
use Publishers\Packt\Ebook;
use Publishers\Packt\Presentation;
use Publishers\Packt\Video;
use function Publishers\Packt\getBook;
use function Publishers\Packt\saveBook;
use const Publishers\Packt\COUNT;
use const Publishers\Packt\KEY;*/


use Publishers\Packt\{
    Book,
    Ebook,
    Presentation,
    Video,
    function getBook,
    function saveBook,
    const COUNT,
    const KEY
};