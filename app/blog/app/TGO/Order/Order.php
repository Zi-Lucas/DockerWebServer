<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-14
 * Time: 09:15
 */

namespace App\TGO\Order;


abstract class Order
{
    protected $productID;
    protected $userID;

    abstract function build($productID,$userID);

    abstract function createOrderID($productID,$userID);

    public function checkOrder()
    {
        echo $this->orderID? '订单信息验证通过<br>':'订单信息验证不通过<br>';
    }
}