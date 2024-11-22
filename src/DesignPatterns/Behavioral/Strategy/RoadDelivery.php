<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class RoadDelivery implements DeliveryStrategy {
    public function calculateCost(float $weight, float $distance): float {
        if ($weight < 0 || $distance < 0) {
            throw new \InvalidArgumentException("Le poids et la distance doivent être positifs.");
        }
        return $distance * 0.5 + $weight * 2;
    }
}