<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class Bateau extends Transport {
    public function livrer() {
        return "Livraison par mer avec un Bateau.";
    }
}