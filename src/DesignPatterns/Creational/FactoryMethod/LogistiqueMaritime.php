<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class LogistiqueMaritime extends Logistique {
    public function creerTransport(): Transport {
        return new Bateau();
    }
}