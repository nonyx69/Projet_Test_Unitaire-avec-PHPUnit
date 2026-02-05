<?php
namespace App\Entities;

use App\Exceptions\SpaceException;

class Combat extends Vaisseau {
    private $munitions;
    private const CONSO_TIR = 5;

    public function construct($nom, $munitions = 10) {

        parent::construct($nom);

        $this->munitions = $munitions;
    }

    public function tirer(){

        if (!$this->estOperationnel())
             throw new SpaceException("Vaisseau HS : Impossible de tirer.");
        if ($this->munitions <= 0)
             return "Plus de munitions !";

        $this->munitions--;
        $this->subirDegats(self::CONSO_TIR);

            return "FEU ! Munitions restantes : " . $this->munitions;
    }

    public function executerMission(){

        return $this->tirer();
    }

    public function getMunitions(){ 

        $this->munitions; 
     }
}