<?php

namespace Tests\DesignPatterns\SingletonTest;

use App\DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingletonInstance()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();
        $this->assertSame($instance1, $instance2);
    }
    public function testCannotInstantiateDirectly()
    {
        $this->expectException(\Error::class);
        $singleton = new Singleton();
    }
    public function testCannotCloneInstance()
    {
        $this->expectException(\Error::class);

        $singleton = Singleton::getInstance();
        $clonedSingleton = clone $singleton;
    }
    public function testCannotDeserializeInstance()
    {
        $this->expectException(\Exception::class);

        $singleton = Singleton::getInstance();
        $serialized = serialize($singleton);
        unserialize($serialized);

    }

}