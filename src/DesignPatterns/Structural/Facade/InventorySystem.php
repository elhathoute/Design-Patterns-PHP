<?php
namespace App\DesignPatterns\Structural\Facade;

class InventorySystem {
    public function checkStock(string $productId): bool {
        // Check database or API for stock
        return true;
    }
}