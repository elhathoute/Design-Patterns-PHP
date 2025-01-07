<?php

namespace App\DesignPatterns\Creational\Prototype;

class Employe implements Prototype {
    private int $id;
    private string $nom;
    private string $departement;

    public function __construct($id, $nom, $departement) {
        $this->id = $id;
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function __clone() {
    }

    // Getters et setters
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getDepartement() {
        return $this->departement;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDepartement($departement) {
        $this->departement = $departement;
    }
    public function setId($id) {
        $this->id = $id;
    }
}
