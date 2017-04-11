<?php

namespace ISL\Entity\Etudiant;

class Etudiant extends \ISL\Entity\Personne {
    
    private $coursSuivis=[];
    private $niveau = "";
    private $dateDInscription;

    function getCoursSuivis() {
        return $this->coursSuivis;
    }

    function getNiveau() {
        return $this->niveau;
    }

    function getDateDInscription() {
        return $this->dateDInscription;
    }

    function setCoursSuivis($coursSuivis) {
        $this->coursSuivis = $coursSuivis;
    }

    function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    function setDateDInscription($dateDInscription) {
        $this->dateDInscription = $dateDInscription;
    }

 
}
?>