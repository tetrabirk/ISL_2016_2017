<?php

class PersonnagesManager {
    /** @var \PDO */
    private $_db; //instance de pdo

    //constructeur
    
    public function __construct(\PDO $db) {
        $this->setDb($db);
    }
    //getter
    /**
     * 
     * @return \PDO
     */
    public function getDb() {
        return $this->_db;
    }
    //setter
    public function setDb($db) {
        $this->_db = $db;
    }
    
//C R U D ici j'ai suivi ce qu'il disait sur le site en vérifiant que c'était la même syntaxe que dans les slides du cours
    
    public function add(Personnage $perso) { // CREATE
//        var_dump($perso);
        /** @var \PDOStatement */
        $q = $this->getDb()->prepare( //ici, lui mettais _db au lieu de passer par le getter mais je ne pense pas que le probleme vient de là
            'INSERT INTO personnages(nom, forcePerso, degats, niveau,experience) VALUES(:nom, :forcePerso, :degats, :niveau, :experience)'
                );
        
        $q->bindValue(':nom',$perso->nom());
        $q->bindValue(':forcePerso',$perso->forcePerso(),PDO::PARAM_INT);
        $q->bindValue(':degats',$perso->degats(),PDO::PARAM_INT);
        $q->bindValue(':niveau',$perso->niveau(),PDO::PARAM_INT);
        $q->bindValue(':experience',$perso->experience(),PDO::PARAM_INT);

        $q->execute();
    }

    public function get($idperso) { //READone
        $id = (int) $idperso;
        $q = $this->getDb()->query( //même remarque que plus haut
                'SELECT id, nom, forcePerso, degats, niveau, experience fROM personnages WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        
        return new Personnage($donnees);
    }

    public function getList() { //READall
        $persos = [];
        $q = $this->getDb()->query(//même remarque que plus haut
                'SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages ORDER BY nom');
        while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            $persos[] = new Personnage($donnees);
        }
        return $persos;
    }

    public function update(Personnage $perso) { //UPDATE
        $q = $this->getDb()->prepare(//même remarque que plus haut
                'UPDATE personnages SET forcePerso = :forcePerso, degats = :degats, niveau = :niveau ,experience = :experience WHERE id =:id');
        $q->bindValue(':forcePerso',$perso->forcePerso(),PDO::PARAM_INT);
        $q->bindValue(':degats',$perso->degats(),PDO::PARAM_INT);
        $q->bindValue(':niveau',$perso->niveau(),PDO::PARAM_INT);
        $q->bindValue(':experience',$perso->perso(),PDO::PARAM_INT);
        $q->bindValue(':id',$perso->id(),PDO::PARAM_INT);
        
        $q->execute();
        
    }

    public function delete(Personnage $perso) { //DELETE
        $this->getDb()->exec(//même remarque que plus haut
                'DELETE FROM personnages WHERE id = '.$perso->id());
    }

}
