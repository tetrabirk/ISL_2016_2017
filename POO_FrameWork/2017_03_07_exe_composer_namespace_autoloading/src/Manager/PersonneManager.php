<?php

namespace ISL\Manager; 

class PersonneManager{
    
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
            
//            $groupe[$i]->setNom($person['nom']);
//            $groupe[$i]->setPrenom($person['prenom']);
//            $groupe[$i]->setAdresse($person['adresse']);
//            $groupe[$i]->setCp($person['cp']);
//            $groupe[$i]->setPays($person['pays']);
//            $groupe[$i]->setSociete($person['societe']);
            $groupe[$i]->hydrate($person);
            
        }
        return $groupe;
        
    }
    
    
    
//    public function ($data){
//        
//    }
    
    
    
}

    
?>