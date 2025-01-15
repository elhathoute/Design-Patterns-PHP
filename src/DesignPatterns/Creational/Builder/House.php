<?php

namespace App\DesignPatterns\Creational\Builder;

class House
{
    public array $walls = [];
    public string $door='0';
    public array $windows = [];

    public function addWall($wallType) {
        $this->walls[] = $wallType;
    }

    public function setDoor($doorType) {
        $this->door = $doorType;
    }

    public function addWindow($windowType) {
        $this->windows[] = $windowType;
    }

    public function showHouse() {
        echo "House with:\n";
        echo "Walls: " . implode(', ', $this->walls) . "\n";
        echo "Door: $this->door\n";
        echo "Windows: " . implode(', ', $this->windows) . "\n";
    }
}

