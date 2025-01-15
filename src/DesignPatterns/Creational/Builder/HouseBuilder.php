<?php

namespace App\DesignPatterns\Creational\Builder;

class HouseBuilder {
    private $house;


    public function __construct() {
        $this->house = new House();
    }
    public function reset(): void
    {
        $this->house = new House();
    }
    public function buildWalls($wallType) {
        $this->house->addWall($wallType);
        return $this;
    }

    public function buildDoor($doorType) {
        $this->house->setDoor($doorType);
        return $this;
    }

    public function buildWindows($windowType) {
        $this->house->addWindow($windowType);
        return $this;
    }

    public function build() {
        return $this->house;
    }
    public function getHouse(): House
    {
        return $this->house;
    }
}
