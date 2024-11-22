<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class AirDelivery implements DeliveryStrategy {
    public function calculateCost(float $weight, float $distance): float {
        return $distance * 1 + $weight * 3;
    }
}