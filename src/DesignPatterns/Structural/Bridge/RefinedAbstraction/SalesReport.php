<?php

namespace App\DesignPatterns\Structural\Bridge\RefinedAbstraction;

use App\DesignPatterns\Structural\Bridge\Abstraction\Report;
use App\DesignPatterns\Structural\Bridge\ImplementationInterface\FormatGenerator;

readonly class SalesReport extends Report
{
    public function create($data): mixed
    {
        return $this->generator->generate($data);
    }
}