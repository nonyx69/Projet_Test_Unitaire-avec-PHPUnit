<?php
use PHPUnit\Framework\TestCase;
use App\Entities\Combat;
use App\Exceptions\SpaceException;

class VaisseauTest extends TestCase {
    public function testVaisseauSansEnergieEstInactif() {
        $vaisseau = new Combat("Chasseur TIE");
        $vaisseau->subirDegats(100);
        
        $this->assertFalse($vaisseau->estOperationnel());
        $this->expectException(SpaceException::class);
        $vaisseau->tirer();
    }

    public function testRavitaillerReactiveLeVaisseau() {
        $vaisseau = new Combat("X-Wing");
        $vaisseau->subirDegats(100);
        $vaisseau->ravitailler(50);
        
        $this->assertTrue($vaisseau->estOperationnel());
        $this->assertEquals(50, $vaisseau->getCarburant());
    }
}