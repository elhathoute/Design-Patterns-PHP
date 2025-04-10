<?php
namespace App\DesignPatterns\Structural\Facade;

class OrderFacade
{
    private InventorySystem $inventory;
    private PaymentProcessor $payment;
    private ShippingService $shipping;

    public function __construct(
        InventorySystem $inventory,
        PaymentProcessor $payment,
        ShippingService $shipping
    ) {
        $this->inventory = $inventory;
        $this->payment = $payment;
        $this->shipping = $shipping;
    }

    public function placeOrder(string $productId, float $amount): string
    {
        if (!$this->inventory->checkStock($productId)) {
            throw new \Exception("Product out of stock");
        }

        if (!$this->payment->charge($amount)) {
            throw new \Exception("Payment failed");
        }

        return $this->shipping->scheduleDelivery(uniqid('order_'));
    }
}