<?php

namespace OCR_TP1;

class Personnage {

    private $id;
    private $degats;
    private $nom;

    const CEST_MOI = 1;
    const PERSONNAGE_TUE = 2;
    const PERSONNAGE_FRAPPE = 3;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function frapper(Personnage $perso) {
        if ($perso->getId() == $this->getId()) {
            return self::CEST_MOI;
        }
        return $perso->recevoirDegats();
    }

    public function recevoirDegats() {
        $degats = $this->getDegats();
        $this->setDegats($degats += 5);
        if($this->getDegats() >=100){
            return self::PERSONNAGE_TUE;
        }else{
            return self::PERSONNAGE_FRAPPE;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getDegats() {
        return $this->degats;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setId($data_id) {
        $id = (int) $data_id;
        if ($id > 0) {
            $this->id = $id;
        }
    }

    public function setDegats($data_degats) {
        $degats = (int) $data_degats;
        if ($degats >= 0 && $degats <= 100) {
            $this->degats = $degats;
        }
    }

    public function setNom($data_nom) {
        if (is_string($data_nom)) {
            $this->nom = $data_nom;
        }
    }

    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

}
