<?php

namespace App\DesignPatterns\Creational\Singleton;

class Singleton
{
    private static  $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    private function __clone(){}
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize Singleton");
    }}