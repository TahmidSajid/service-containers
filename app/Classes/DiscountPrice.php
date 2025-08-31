<?php

namespace App\Classes;

use App\Interfaces\PaymentGatewayContract;

class DiscountPrice{

    public $payment_gateway;

    public function __construct(PaymentGatewayContract $payment_gateway){
        $this->payment_gateway = $payment_gateway;
    }

    public function apply(){
        $this->payment_gateway->setDiscount(50);
    }


}

?>
