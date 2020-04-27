<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-14
 * Time: 09:28
 */

namespace App\TGO\Order;


class VrOrder extends Order
{
    protected $productID;
    protected $userID;

    public function build($productID,$userID)
    {
        return $this->createOrderID($productID,$userID);
    }

    function createOrderID($productID,$userID)
    {
        return "VR".$productID.$userID;
    }
}