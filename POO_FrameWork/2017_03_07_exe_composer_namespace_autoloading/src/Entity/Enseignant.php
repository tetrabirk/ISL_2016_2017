<?php
namespace ISL\Entity;

class Enseignant extends Personne {
    
    private $coursDonnes=[];
    private $EntreeEnService;
    private $Anciennete;
    
    function getCoursDonnes() {
        return $this->coursDonnes;
    }

    function getEntreeEnService() {
        return $this->EntreeEnService;
    }

    function getAnciennete() {
        return $this->Anciennete;
    }

    function setCoursDonnes($coursDonnes) {
        $this->coursDonnes = $coursDonnes;
    }

    function setEntreeEnService($EntreeEnService) {
        $this->EntreeEnService = $EntreeEnService;
    }

    function setAnciennete($Anciennete) {
        $this->Anciennete = $Anciennete;
    }


    
}
?>