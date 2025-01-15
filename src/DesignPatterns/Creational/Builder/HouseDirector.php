<?php

namespace App\DesignPatterns\Creational\Builder;

class HouseDirector
{
    public function buildVilla(HouseBuilder $builder) {
        return $builder->buildWalls('Villa Walls')
            ->buildDoor('Villa Door')
            ->buildWindows('Villa Window')
            ->build();
    }

    public function buildCottage(HouseBuilder $builder) {
        return $builder->buildWalls('Wooden Wall')
            ->buildDoor('Single Wooden Door')
            ->buildWindows('Small Glass Window')
            ->build();
    }
}