<?php

namespace App\DesignPatterns\Creational\Factory\FactoryMethod;

use App\exceptions\UnsupportedTransportException;

abstract class Logistique {
    abstract public function creerTransport():?Transport; // factory method

    public function planifierLivraison() {
        $transport = $this->creerTransport();
        if (!$transport) {
            throw new UnsupportedTransportException("Transport non supporté.");
        }
        return $transport->livrer();
    }
}
