<?php

namespace Tests\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\ClientProcessPayment;
use App\DesignPatterns\Structural\Adapter\PaymentGateway;
use App\DesignPatterns\Structural\Adapter\PaypalPayment;
use App\DesignPatterns\Structural\Adapter\StripeAdapter;
use App\DesignPatterns\Structural\Adapter\StripePayment;
use PHPUnit\Framework\TestCase;

class ClientProcessPaymentTest extends TestCase
{
    public function testProcessPaymentCallsPayMethod()
    {
        $paymentGatewayMock = $this->createMock(PaymentGateway::class);

        $paymentGatewayMock->expects($this->once())
            ->method('pay')
            ->with($this->equalTo(100.0));

        $clientProcessPayment = new ClientProcessPayment();
        $clientProcessPayment->processPayment($paymentGatewayMock, 100.0);
    }

    public function testProcessPaymentCallsPayMethodWithPayPal()
    {
        $payPalPaymentMock = $this->createMock(PaypalPayment::class);

        $payPalPaymentMock->expects($this->once())
            ->method('pay')
            ->with($this->equalTo(100.0));

        $clientProcessPayment = new ClientProcessPayment();
        $clientProcessPayment->processPayment($payPalPaymentMock, 100.0);
    }

    public function testProcessPaymentCallsPayMethodWithStripe()
    {
        $stripePaymentMock = $this->createMock(StripePayment::class);

        $stripePaymentMock->expects($this->once())
            ->method('charge')
            ->with($this->equalTo(100.0));

        $stripeAdapter = new StripeAdapter($stripePaymentMock);

        $clientProcessPayment = new ClientProcessPayment();
        $clientProcessPayment->processPayment($stripeAdapter, 100.0);
    }
}