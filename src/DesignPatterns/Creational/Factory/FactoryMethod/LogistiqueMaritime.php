<?php

namespace App\DesignPatterns\Creational\Factory\FactoryMethod;

class LogistiqueMaritime extends Logistique {
    public function creerTransport(): Transport {
        return new Bateau();
    }
}