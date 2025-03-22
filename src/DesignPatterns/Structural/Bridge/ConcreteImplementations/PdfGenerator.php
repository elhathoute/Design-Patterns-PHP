<?php

namespace App\DesignPatterns\Structural\Bridge\ConcreteImplementations;

use App\DesignPatterns\Structural\Bridge\ImplementationInterface\FormatGenerator;

class PdfGenerator implements FormatGenerator
{

    public function generate(mixed $data): string
    {
        return "Generating PDF with data: " . json_encode($data);
    }
}