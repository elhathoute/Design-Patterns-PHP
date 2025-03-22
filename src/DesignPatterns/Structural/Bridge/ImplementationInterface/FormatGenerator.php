<?php

namespace App\DesignPatterns\Structural\Bridge\ImplementationInterface;

interface FormatGenerator
{
    public function generate(mixed $data):mixed;

}