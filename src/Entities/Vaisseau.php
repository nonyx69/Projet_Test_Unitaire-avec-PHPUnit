<?php
namespace App\Entities;

use App\Exceptions\SpaceException;

abstract class Vaisseau {
    protected $nom;
    protected $carburant;
    protected $estOperationnel = true;

    public function __construct($nom, $carburant = 100) {
        $this->nom = $nom;
        $this->setCarburant($carburant);
    }

    public function getNom(){
         return $this->nom; 
        }

    public function getCarburant(){
         return $this->carburant; 
        }

    public function setCarburant($niveau){
        $this->carburant = max(0, min(100, $niveau));
        if ($this->carburant <= 0) {
            $this->estOperationnel = false;
        }
    }

    public function estOperationnel() {
        return $this->estOperationnel && $this->carburant > 0;
    }

    public function ravitailler($quantite){
        if ($quantite < 0)
             throw new SpaceException("Quantité de carburant invalide.");
        $this->setCarburant($this->carburant + $quantite);
        if ($this->carburant > 0) $this->estOperationnel = true;
    }

    public function subirDegats($impactCarburant){
        $this->setCarburant($this->carburant - $impactCarburant);
    }

    abstract public function executerMission();
}