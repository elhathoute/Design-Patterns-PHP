<?php
namespace Tests\DesignPatterns\Structural\Facade;

use App\DesignPatterns\Structural\Facade\OrderFacade;
use App\DesignPatterns\Structural\Facade\InventorySystem;
use App\DesignPatterns\Structural\Facade\PaymentProcessor;
use App\DesignPatterns\Structural\Facade\ShippingService;
use PHPUnit\Framework\TestCase;

class OrderFacadeTest extends TestCase
{
    public function testPlaceOrderSuccess()
    {
        // Create mock objects for all dependencies
        $inventoryMock = $this->createMock(InventorySystem::class);
        $paymentMock = $this->createMock(PaymentProcessor::class);
        $shippingMock = $this->createMock(ShippingService::class);

        // Set up mock expectations
        $inventoryMock->expects($this->once())
            ->method('checkStock')
            ->with('prod_123')
            ->willReturn(true);

        $paymentMock->expects($this->once())
            ->method('charge')
            ->with(99.99)
            ->willReturn(true);

        $shippingMock->expects($this->once())
            ->method('scheduleDelivery')
            ->with($this->matchesRegularExpression('/^order_/'))
            ->willReturn('TRACK-12345');

        // Create facade with mocked dependencies
        $facade = new OrderFacade($inventoryMock, $paymentMock, $shippingMock);

        // Execute the test
        $result = $facade->placeOrder('prod_123', 99.99);

        // Assert the expected result
        $this->assertEquals('TRACK-12345', $result);
    }
}