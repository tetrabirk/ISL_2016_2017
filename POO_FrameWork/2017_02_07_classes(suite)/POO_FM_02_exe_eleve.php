<?php
class Eleve{
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct(){
        $this->prenom= 'Norman';
    }

    public function setNomComplet($pn, $n){
    $this->prenom = $pn;
    $this->nom = $n;
    }
    public function getNomComplet($majuscule = false){
        $pn= $this->prenom;
        $n= $this->nom;
        if($majuscule){
            $n= strtoupper($n);
        }

        return $pn.' '.$n;
    }

    public function setAdresse(Adresse $adresse){
        $this->adresse= $adresse;


    }

    public function getAdresse(){
        return $this->adresse->getAdresse();
    }
}
