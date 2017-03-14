<?php

namespace ISL\Entity;

class Vehicule{
    
    private $marque;
    private $couleur;
    private $annee;
    
    public function __construct($couleur) {
        $this->couleur= $couleur;
    }
    public function getMarque(){
        return $this->marque;
    }
    public function setMarque(){
        $this->marque = $marque;
    }
    public function __toString() {
        return 'Couleur:'.$this->couleur;
    }
    
}