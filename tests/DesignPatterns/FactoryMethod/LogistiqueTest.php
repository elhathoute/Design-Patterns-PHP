<?php

namespace Tests\DesignPatterns\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Bateau;
use App\DesignPatterns\Creational\FactoryMethod\Camion;
use App\DesignPatterns\Creational\FactoryMethod\Logistique;
use App\DesignPatterns\Creational\FactoryMethod\LogistiqueMaritime;
use App\DesignPatterns\Creational\FactoryMethod\LogistiqueRoutiere;
use App\DesignPatterns\Creational\FactoryMethod\Transport;
use App\exceptions\UnsupportedTransportException;
use PHPUnit\Framework\TestCase;

class LogistiqueTest  extends TestCase
{
    /** @test */
    public function it_should_create_a_camion_for_logistique_routiere()
    {
        $logistique = new LogistiqueRoutiere();
        $transport = $logistique->creerTransport();

        $this->assertInstanceOf(Camion::class, $transport);
        $this->assertEquals("Livraison par route avec un Camion.", $transport->livrer());
    }

    /** @test */
    public function it_should_create_a_bateau_for_logistique_maritime()
    {
        $logistique = new LogistiqueMaritime();
        $transport = $logistique->creerTransport();

        $this->assertInstanceOf(Bateau::class, $transport);
        $this->assertEquals("Livraison par mer avec un Bateau.", $transport->livrer());
    }

    /** @test */
    public function it_should_throw_exception_for_unsupported_transport()
    {
        // Création d'une classe anonyme pour simuler un transport non supporté
        $logistique = new class extends Logistique {
            public function creerTransport(): ?Transport {
                return null;
            }
        };

        $this->expectException(UnsupportedTransportException::class);
        $this->expectExceptionMessage("Transport non supporté.");

        $logistique->planifierLivraison();
    }
}