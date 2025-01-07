<?php

namespace App\DesignPatterns\Creational\Factory\FactoryMethod;

class LogistiqueRoutiere extends Logistique {
    public function creerTransport(): Transport {
        return new Camion();
    }
}
