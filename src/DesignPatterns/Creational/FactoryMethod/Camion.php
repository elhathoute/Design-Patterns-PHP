<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class Camion extends Transport {
    public function livrer() {
        return "Livraison par route avec un Camion.";
    }
}
