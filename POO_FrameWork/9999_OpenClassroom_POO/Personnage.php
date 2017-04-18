<?php

class Personnage {

    //les attributs
    
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;
    
    //methode d'hydratation
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    public function hydrate(array $donnees){ //recoit les donnee sous forme d'array
        foreach($donnees as $key => $value){ 
            $method = 'set'.ucfirst($key); // par exemple setNom ($key = 'nom')
            if(method_exists($this,$method)){   //si la methode existe
                $this->$method($value);         //this->setNom('bob')
                
                

            }
        }
    }
    
    //getters
    
    function id() {         return $this->_id;}             
    function nom() {        return $this->_nom;}
    function forcePerso() { return $this->_forcePerso;}
    function degats() {     return $this->_degats;}
    function niveau() {     return $this->_niveau;}
    function experience() { return $this->_experience;}
    
    //setters
    
    function setId($id) { //est ce bien un integer >0 ?
        $id = (int) $id; 
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    function setNom($nom) { //est ce bien un string?
        if (is_string($nom)) {
            $this->_nom = $nom;
        }
    }

    function setForcePerso($forcePerso) { //est ce bien un integer >0 et <100?
        $forcePerso = (int) $forcePerso;
        if ($forcePerso >= 1 && $forcePerso <= 100) {
            $this->_forcePerso = $forcePerso;
        }
    }

    function setDegats($degats) { //est ce bien un integer >0 et <100?
        $degats = (int) $degats;
        if ($degats >= 0 && $degats <= 100) {
            $this->_degats = $degats;
        }
    }

    function setNiveau($niveau) { //est ce bien un integer >0 et <100?
        $niveau = (int) $niveau;
        if ($niveau >= 1 && $niveau <= 100) {
            $this->_niveau = $niveau;
        }
    }

    function setExperience($experience) { //est ce bien un integer >0 et <100?
        $experience = (int) $experience;
        if ($experience >= 1 && $experience <= 100) {
            $this->_experience = $experience;
        }
    }

}