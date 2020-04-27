<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\TGO\Order\ObOrder;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function addProvider_createOrderID_Data(){
        return [
            [1,1],
            [2,2],
            [3,3]
        ];
    }
    /**
     * @dataProvider addProvider_createOrderID_Data
     *
     * @param $appId
     * @param $result
     */
    //vendor/bin/phpunit --filter=UserTest::test_ObOrder_createOrderID
    public function test_ObOrder_createOrderID($productID,$userID){
        $order = new ObOrder();
        $rel = $order->createOrderID($productID,$userID);
        $this->assertThat($rel,$this->logicalNot($this->isTrue()));
    }
}
