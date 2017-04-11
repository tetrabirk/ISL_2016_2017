<?php

namespace ISL\Entity\Personne;

class Personne {
    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $pays;
    private $societe;
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getCp() {
        return $this->cp;
    }

    function getPays() {
        return $this->pays;
    }

    function getSociete() {
        return $this->societe;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setCp($cp) {
        $this->cp = $cp;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }

    function setSociete($societe) {
        $this->societe = $societe;
    }

    public function hydrate(array $datas){
        foreach ($datas as $key => $valeur){
            $nomMethode = "set".ucfirst($key);
            if (method_exists($this, $nomMethode)){
                $this->$nomMethode($valeur);
            }
        }
    }
}
?>