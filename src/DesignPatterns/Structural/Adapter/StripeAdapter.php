<?php

namespace App\DesignPatterns\Structural\Adapter;

class StripeAdapter implements PaymentGateway
{

    private  StripePayment $stripe;

    public function __construct(StripePayment $stripePayment)
    {
        $this->stripe = $stripePayment;
    }
    public function pay(float $amount)
    {
        $this->stripe->charge($amount);
    }
}