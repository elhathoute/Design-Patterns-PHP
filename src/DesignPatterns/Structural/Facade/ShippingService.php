<?php
namespace App\DesignPatterns\Structural\Facade;

class ShippingService {
    public function scheduleDelivery(string $orderId): string {
        // Schedule with FedEx/UPS
        return "Tracking-123";
    }
}