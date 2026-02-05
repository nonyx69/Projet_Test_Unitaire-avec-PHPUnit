<?php

namespace App\Entities;
use App\Exceptions\SpaceException;


class Transport extends Vaisseau {
    private $capaciteMax;

    private $chargeActuelle = 0;

    public function construct($nom,$capaciteMax) {

        parent::construct($nom);

        $this->capaciteMax = $capaciteMax;
    }

    public function charger(float $poids) {
        if (!$this->estOperationnel()) 
            throw new SpaceException("Vaisseau HS : Chargement impossible.");
        if ($this->chargeActuelle + $poids > $this->capaciteMax) {
            throw new SpaceException("Capacité de soute dépassée !");
        }
        $this->chargeActuelle += $poids;
    }

    public function executerMission(){
        return "Transport de " . $this->chargeActuelle . " tonnes en cours.";
    }

    public function getChargeActuelle(){ 
        return $this->chargeActuelle; 
}
}