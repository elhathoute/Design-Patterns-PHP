<?php

namespace App\DesignPatterns\Structural\Bridge\ConcreteImplementations;

use App\DesignPatterns\Structural\Bridge\ImplementationInterface\FormatGenerator;

class CsvGenerator implements FormatGenerator
{

    public function generate(mixed $data): string
    {
        return "Generating CSV with data: " . json_encode($data);
    }
}