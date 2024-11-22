<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class SeaDelivery implements DeliveryStrategy {
    public function calculateCost(float $weight, float $distance): float {
        return $distance * 0.2 + $weight * 1.5;
    }
}
