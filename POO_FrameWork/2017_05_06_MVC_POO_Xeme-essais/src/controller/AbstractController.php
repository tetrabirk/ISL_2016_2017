<?php

namespace MVC_POO;

abstract class AbstractController {

    private $id;
    private $nom;
    private $titre;
    private $description;
    
    public function __construct(array $data){
        $this->hydrate($data);
    }
    
    public function hydrate($data){
        foreach ($array as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
            
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        if (lenght($nom) < 20) {
            $this->nom = $nom;
        }
    }

    public function setTitre($titre) {
        if (lenght($titre) < 100) {
            $this->titre = $titre;
        }
    }

    public function setDescription($description) {
        if (lenght($description) < 1000) {
            $this->description = $description;
        }
    }

}
