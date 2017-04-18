<?php

namespace ISL\Manager; 

class EntityManager{
    
    private $db; 

    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function getDb() {
        return $this->db;
    }
   
    public function setDb($db) {
        $this->db = $db;
    }
    
    
    
    
    public function randomPerson(){
        $person = [];
        $faker= \Faker\Factory::create('fr_BE');
        
        $person['nom']    =$faker->lastName;
        $person['prenom'] =$faker->firstName;
        $person['adresse'] =$faker->streetAddress;
        $person['cp'] =$faker->postCode;
        $person['pays'] =$faker->country;
        $person['societe'] =$faker->company;
        
        return $person;
        
    }
    
    
    public function create($nbre){
        $groupe = [];
        for ($i=0; $i<$nbre; $i++){
            $person = $this->randomPerson();
            
            $groupe[$i]= new \ISL\Entity\Personne();

            $groupe[$i]->hydrate($person);
            
            $this->add($groupe[$i]);
            
        }
        return $groupe;
        
    }
    
    public function add(\ISL\Entity\Personne $person) { // CREATE
        $q = $this->getDb()->prepare( 
            'INSERT INTO personne(nom, prenom, adresse, cp, pays) VALUES(:nom, :prenom, :adresse, :cp, :pays)'
                );
        
        $q->bindValue(':nom',$person->getNom());
        $q->bindValue(':prenom',$person->getPrenom());
        $q->bindValue(':adresse',$person->getAdresse());
        $q->bindValue(':cp',$person->getCp());
        $q->bindValue(':pays',$person->getPays());

        $q->execute();
    }

    
    
//    public function ($data){
//        
//    }
    
    
    
}

    
?>