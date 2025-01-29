<?php

namespace App\DesignPatterns\Structural\Adapter;

class ClientProcessPayment
{

    public function processPayment(PaymentGateway $paymentGateway,float $amount):void
    {
        $paymentGateway->pay($amount);
    }
}