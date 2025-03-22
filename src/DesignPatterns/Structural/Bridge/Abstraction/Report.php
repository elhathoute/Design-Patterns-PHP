<?php

namespace App\DesignPatterns\Structural\Bridge\Abstraction;

use App\DesignPatterns\Structural\Bridge\ImplementationInterface\FormatGenerator;

abstract readonly class Report
{
    public function __construct(protected FormatGenerator $generator) {
    }

    abstract public function create($data) : mixed;
}