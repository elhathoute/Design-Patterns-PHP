<?php

namespace App\DesignPatterns\Creational\Factory\Factory;

use App\DesignPatterns\Creational\Factory\FactoryMethod\Transport;

interface TransportFactoryInterface
{
    public static function createTransport(string $type): Transport;
}