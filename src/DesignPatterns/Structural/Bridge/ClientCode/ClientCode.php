<?php

namespace App\DesignPatterns\Structural\Bridge\ClientCode;

use App\DesignPatterns\Structural\Bridge\ConcreteImplementations\CsvGenerator;
use App\DesignPatterns\Structural\Bridge\ConcreteImplementations\PdfGenerator;
use App\DesignPatterns\Structural\Bridge\RefinedAbstraction\SalesReport;

class ClientCode
{
    public function generateReport()
    {
        $pdfGenerator = new PdfGenerator();
        $csvGenerator = new CsvGenerator();

        $salesReportPdf = new SalesReport($pdfGenerator);
        $salesReportCsv = new SalesReport($csvGenerator);

        return [
            'pdf' => $salesReportPdf->create(["total_sales" => 1000]),
            'csv' => $salesReportCsv->create(["total_sales" => 1000]),
        ];
    }
}