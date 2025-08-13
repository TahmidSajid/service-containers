<?php

namespace App\Classes;

class DiscountPrice{

    public $payment_gateway;

    public function __construct(PaymentGateway $payment_gateway){
        $this->payment_gateway = $payment_gateway;
    }

    public function apply(){
        $this->payment_gateway->setDiscount(50);
    }
}

?>
