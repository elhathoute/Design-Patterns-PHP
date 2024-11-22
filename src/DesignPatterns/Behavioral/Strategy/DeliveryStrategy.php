<?php

namespace App\DesignPatterns\Behavioral\Strategy;

interface DeliveryStrategy {
    public function calculateCost(float $weight, float $distance): float;
}