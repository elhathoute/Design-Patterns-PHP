<?php

namespace Tests\DesignPatterns\Creational\PrototypeTest;

use App\DesignPatterns\Creational\Prototype\Employe;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    //todo :: sans utiliser le Prototype Pattern :
    public function testCreateEmploye() {
        $emp = new Employe(1, "John", "Développement");

        $this->assertEquals(1, $emp->getId());
        $this->assertEquals("John", $emp->getNom());
        $this->assertEquals("Développement", $emp->getDepartement());
    }

    public function testCreateMultipleEmployes() {
        $emp1 = new Employe(1, "John", "Développement");
        $emp2 = new Employe(2, "Jane", "Marketing");

        $this->assertEquals("John", $emp1->getNom());
        $this->assertEquals("Développement", $emp1->getDepartement());

        $this->assertEquals("Jane", $emp2->getNom());
        $this->assertEquals("Marketing", $emp2->getDepartement());
    }
    //todo:: avec l'utilisation du Prototype Pattern :
    public function testCloneEmploye() {
        $empPrototype = new Employe(1, "John", "Développement");

        $empClone = clone $empPrototype;

        $this->assertEquals("John", $empClone->getNom());
        $this->assertEquals("Développement", $empClone->getDepartement());
        $this->assertEquals(1, $empClone->getId());

        $this->assertNotSame($empPrototype, $empClone);
    }

    public function testModifyClone() {
        $empPrototype = new Employe(1, "John", "Développement");

        $empClone = clone $empPrototype;

        $empClone->setNom("Jane");
        $empClone->setDepartement("Marketing");
        $empClone->setId(2);

        $this->assertEquals("Jane", $empClone->getNom());
        $this->assertEquals("Marketing", $empClone->getDepartement());
        $this->assertEquals(2, $empClone->getId());

        $this->assertEquals("John", $empPrototype->getNom());
        $this->assertEquals("Développement", $empPrototype->getDepartement());
        $this->assertEquals(1, $empPrototype->getId());
    }
}