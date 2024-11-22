<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class DeliveryContext {
    private DeliveryStrategy $strategy;

    public function __construct(DeliveryStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(DeliveryStrategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function calculateCost(float $weight, float $distance): float {
        return $this->strategy->calculateCost($weight, $distance);
    }
}