<?php
namespace App\DesignPatterns\Structural\Facade;

class PaymentProcessor {
    public function charge(float $amount): bool {
        // Process payment via Stripe/PayPal
        return true;
    }
}