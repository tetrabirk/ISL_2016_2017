<?php

namespace ISL\Manager;

class EtudiantManager extends EntityManager {
    public function randomStudent(){
        $student = [];
        $faker= \Faker\Factory::create('fr_BE');
        
        $student = EntityManager::randomPerson();
        $student['coursSuivis'] = ['teeeeeest','test'];
        $student['niveau'] = $faker->numberBetween(1,3);
        $student['dateDInscription'] = $faker->date('2015-09-01');
        
        return $student;
    }

    public function createStudent($nbre){
        $groupe = [];
        for($i=0;$i<$nbre; $i++){
            $student = $this->randomStudent();
            
            $groupe[$i]= new \ISL\Entity\Etudiant();
            $groupe[$i]->hydrate($student);
            
        }
        return $groupe;
    }
}
?>