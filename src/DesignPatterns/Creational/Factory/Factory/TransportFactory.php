<?php

namespace App\DesignPatterns\Creational\Factory\Factory;

use App\DesignPatterns\Creational\Factory\FactoryMethod\Bateau;
use App\DesignPatterns\Creational\Factory\FactoryMethod\Camion;
use App\DesignPatterns\Creational\Factory\FactoryMethod\Transport;


class TransportFactory implements TransportFactoryInterface{
    public static function createTransport(string $type): Transport {
        return match ($type) {
            'camion' => new Camion(),
            'bateau' => new Bateau(),
            default => throw new \InvalidArgumentException("Type inconnu"),
        };
    }
}

