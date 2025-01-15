<?php

namespace Tests\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\House;
use App\DesignPatterns\Creational\Builder\HouseBuilder;
use App\DesignPatterns\Creational\Builder\HouseDirector;
use PHPUnit\Framework\TestCase;

class HouseDirectorTest extends TestCase
{
    public function testBuildMultipleHouses()
    {
        $builder = new HouseBuilder();
        $director = new HouseDirector();

        $director->buildVilla($builder);
        $villa = $builder->getHouse();

        $this->assertInstanceOf(House::class, $villa);
        $this->assertSame('Villa Walls', $villa->walls[0]);
        $this->assertSame('Villa Door', $villa->door);

        $builder->reset();
        $customHouse = $builder
            ->buildWalls('Wooden Wall')
            ->buildDoor('Single Wooden Door')
            ->buildWindows('Small Glass Window')
            ->build();

        $this->assertInstanceOf(House::class, $customHouse);
        $this->assertSame('Wooden Wall', $customHouse->walls[0]);
        $this->assertSame('Single Wooden Door', $customHouse->door);
        $this->assertSame('Small Glass Window', $customHouse->windows[0]);
    }
}
