<?php

namespace App\Http\Controllers;

use APP\TGO\{
    Container,
    Pay\Wxpay,
    Pay\Zfbpay,
    Order\ObOrder,
    Order\VrOrder,
};
class UserController extends Controller
{
    public function __construct()
    {
        Container::bind("pay",function (){
            return new Wxpay();
        });
    }

    public function index(){
        echo "user index";
    }

    public function pay($userID,$productID)
    {
//        (new Zfbpay(new VrOrder(),$userID,$productID))->pay();
    }

    public function pay2($userID,$productID)
    {

    }
}
