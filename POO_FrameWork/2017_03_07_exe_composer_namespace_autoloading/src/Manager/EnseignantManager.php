<?php

namespace ISL\Manager;

class EnseignantManager extends EntityManager {
    public function randomTeacher(){
        $teacher = [];
        $faker= \Faker\Factory::create('fr_BE');
        
        $teacher = EntityManager::randomPerson();
        $teacher['coursDonnes'] = ['teeeeeest','test'];
        $teacher['Anciennete'] = $faker->numberBetween(1,10);
        $teacher['EntreeEnService'] = $faker->date('2015-09-01');
        
        return $teacher;
    }

    public function createTeacher($nbre){
        $groupe = [];
        for($i=0;$i<$nbre; $i++){
            $teacher = $this->randomTeacher();
            
            $groupe[$i]= new \ISL\Entity\Enseignant();
            $groupe[$i]->hydrate($teacher);
            
        }
        return $groupe;
    }
}
?>