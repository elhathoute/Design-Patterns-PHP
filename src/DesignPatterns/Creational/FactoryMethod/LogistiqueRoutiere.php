<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class LogistiqueRoutiere extends Logistique {
    public function creerTransport(): Transport {
        return new Camion();
    }
}
