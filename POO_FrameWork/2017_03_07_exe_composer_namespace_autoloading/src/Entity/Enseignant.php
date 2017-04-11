<?php
namespace ISL\Entity\Enseignant;

class Etudiant extends \ISL\Entity\Personne {
    
    private $coursDonnes=[];
    private $EntreEnService;
    private $Anciennete;
    
    function getCoursDonnes() {
        return $this->coursDonnes;
    }

    function getEntreEnService() {
        return $this->EntreEnService;
    }

    function getAnciennete() {
        return $this->Anciennete;
    }

    function setCoursDonnes($coursDonnes) {
        $this->coursDonnes = $coursDonnes;
    }

    function setEntreEnService($EntreEnService) {
        $this->EntreEnService = $EntreEnService;
    }

    function setAnciennete($Anciennete) {
        $this->Anciennete = $Anciennete;
    }


    
}
?>