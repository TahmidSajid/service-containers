<?php

namespace App\Interfaces;


interface PaymentGatewayContract{

    public function setDiscount($discount);
    public function price();

}

?>
