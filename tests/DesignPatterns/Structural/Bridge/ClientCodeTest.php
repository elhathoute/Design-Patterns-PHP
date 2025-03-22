<?php

namespace Tests\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\ClientCode\ClientCode;
use PHPUnit\Framework\TestCase;

class ClientCodeTest extends TestCase
{
    public function testGenerateReport()
    {
        $clientCode = new ClientCode();
        $result = $clientCode->generateReport();

        $expectedPdf = "Generating PDF with data: {\"total_sales\":1000}";
        $expectedCsv = "Generating CSV with data: {\"total_sales\":1000}";

        $this->assertEquals($expectedPdf, $result['pdf']);
        $this->assertEquals($expectedCsv, $result['csv']);
    }

    public function testGenerateReportFail()
    {
        $clientCode = new ClientCode();
        $result = $clientCode->generateReport();

        $incorrectPdf = "Generating PDF with data: {\"total_sales\":999}";
        $incorrectCsv = "Generating CSV with data: {\"total_sales\":999}";

        $this->assertNotEquals($incorrectPdf, $result['pdf'], "PDF generation should not match incorrect data.");
        $this->assertNotEquals($incorrectCsv, $result['csv'], "CSV generation should not match incorrect data.");
    }
}
