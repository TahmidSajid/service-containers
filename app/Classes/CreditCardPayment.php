<?php

namespace App\Classes;

use App\Interfaces\PaymentGatewayContract;

class CreditCardPayment implements PaymentGatewayContract{

    public $amount;
    public $discount;

    public function __construct($amount){
        $this->amount = $amount;
    }

    public function setDiscount($discount){
        $this->discount = $discount;
    }

    public function price(){

        $fees = 10;

        if($this->discount){
            $price =  $this->amount - (($this->amount/100) * $this->discount);
            return [
                'price' => $price + $fees,
                'discount' => $this->discount,
                'fees'     => $fees,
            ];
        }else{
            $price = $this->amount;
            return [
                'price' => $price + $fees,
                'fees'     => $fees,
            ];
        }
    }


}

?>
