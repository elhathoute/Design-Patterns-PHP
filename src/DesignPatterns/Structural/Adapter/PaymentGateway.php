<?php

namespace App\DesignPatterns\Structural\Adapter;

interface PaymentGateway
{
 public  function pay(float $amount);
}