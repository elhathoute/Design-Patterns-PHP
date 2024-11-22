<?php

namespace Tests\DesignPatterns\Creational;

use App\DesignPatterns\Behavioral\Strategy\AirDelivery;
use App\DesignPatterns\Behavioral\Strategy\DeliveryContext;
use App\DesignPatterns\Behavioral\Strategy\RoadDelivery;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testContextWithRoadDelivery() {
        $context = new DeliveryContext(new RoadDelivery());
        $cost = $context->calculateCost(100, 50);

        $this->assertEquals(225, $cost); // ( 50 * 0.5 + 100 * 2  = 225)
    }
    public function testContextWithAirDelivery() {
        $context = new DeliveryContext(new AirDelivery());
        $cost = $context->calculateCost(100, 50);

        $this->assertEquals(350, $cost); // (50 * 1 + 100 * 3 = 350)
    }
    public function testInvalidStrategyThrowsException(): void {
        $this->expectException(\InvalidArgumentException::class);

        $context = new DeliveryContext(new RoadDelivery());

        $context->calculateCost(-100, 50);
    }
    public function testIncorrectStrategyUsed(): void {
        $context = new DeliveryContext(new AirDelivery());

        $cost = $context->calculateCost(100, 50); // 350

        $this->assertNotEquals(225, $cost, "La stratégie aérienne ne devrait pas donner le même résultat que la stratégie routière.");
    }
}