<?php
class Personnage{
    private $_force = 50; //force du perso
    private $_localisation = 'Liege'; //localisation
    private $_experience = 1; //xp
    private $_degats = 0; //en francais dans le texte;
    
    //variable statique PRIVEE
    
    private static $_textADire ='Je vais tous vous tuer !';
    
    //declaration des constantes
    
    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE =80;
    
    public function __construct($forceinitale){
        echo 'voici le constructeur!<br/>' ;
        $this->setForce($forceinitale);
        $this->_experience =1;
    }
    
    public function force(){
        return $this->_force;
    }
    public function localisation(){
        return $this->_localisation;
    }
    public function experience(){
        return $this->_experience;
    }
    public function degats(){
        return $this->_degats;
    }
    
    public function setForce($force){

        if(in_array($force,[self::FORCE_PETITE,  self::FORCE_MOYENNE, self::FORCE_GRANDE])){
            $this->_force = $force;
        }
    }
    
    public function setExperience($experience){
        if (!is_int($experience)){ // S'il ne s'agit pas d'un nombre entier.
          trigger_error('L\'XP d\'un personnage doit être un nombre entier', E_USER_WARNING);
          return;
        }

        if ($experience > 100){ // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
          trigger_error('L\'XP d\'un personnage ne peut dépasser 100', E_USER_WARNING);
          return;
        }
        $this->_experience = $experience;
    }
    public function setDegats($degats){
        if (!is_int($degats)){ // S'il ne s'agit pas d'un nombre entier.
          trigger_error('Les degats d\'un personnage doit être un nombre entier', E_USER_WARNING);
          return;
        }

        if ($degats > 100){ // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
          trigger_error('Les degats d\'un personnage ne peut dépasser 100', E_USER_WARNING);
          return;
        }
        $this->_experience = $degats;
    }
    
    
    
    public function deplacer(){//une methode qui déplacera le personnage(modifiera sa localisation)
    }
    public function frapper(Personnage $persoAFrapper){//une methode qui frappera un personnage (en fct de sa force)
        $persoAFrapper->degats += $this->_force;
    }
    public function gagnerExperience(){//une méthode augmentant l'attribut $expérience du perso
        $this->_experience += 1;
    }

    public function afficherExperience(){
        echo $this->_experience;
    }
    
    public static function parler(){
        echo self::$_textADire;
    }
    
}
?>
