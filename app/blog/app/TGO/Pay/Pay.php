<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-14
 * Time: 08:58
 */

namespace App\TGO\Pay;


abstract class Pay
{
    protected $orderID;

    abstract public function pay();


}