<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-04-14
 * Time: 09:10
 */

namespace App\TGO\Pay;

use App\TGO\Order\Order;
class Zfbpay extends Pay
{
    protected $orderID;
    protected $productID;
    protected $userID;
    protected $order;

    public function __construct(Order $order,$productID,$userID)
    {
        $this->productID = $productID;
        $this->userID = $userID;
        $this->order = $order;
    }

    public function pay()
    {
        $this->orderID = $this->order->build($this->productID,$this->userID);
        $this->checkOrder();
        echo "支付宝支付订单号：".json_encode($this->orderID)."<br>";
    }
}