<?php

namespace App\Classes;

class PaymentGateway{

    public $amount;
    public $discount;

    public function __construct($amount){
        $this->amount = $amount;
    }

    public function setDiscount($discount){
        $this->discount = $discount;
    }


    public function price(){

        if($this->discount){
            return ($this->amount/100) * $this->discount;
        }else{
            return $this->amount;
        }

    }

}
?>
