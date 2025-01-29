<?php

namespace App\DesignPatterns\Structural\Adapter;

class PaypalPayment implements PaymentGateway
{
 public function pay(float $amount)
 {
     echo "pay $amount using PaypalPayment\n";
 }
}