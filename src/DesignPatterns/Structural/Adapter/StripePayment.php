<?php

namespace App\DesignPatterns\Structural\Adapter;

class StripePayment
{
    public  function charge(float $amount)
    {
        echo "Charged $amount using StripePayment\n";

    }

}