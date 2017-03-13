<?php

$exception ="";
try{
    $connex = new PDO('mysql:host=localhost;dbname=poo_php','root','');
    $connex->exec("SET CHARACTER SET utf8");
}catch(\PDOException $exception){
    //une erreur s'est produite
    echo 'catastrophe! '. $exception->getMessage();
}
//    $personne = new ()
//    $requete = $connex->prepare(SELECT * FROM personnes WHERE id=1);

//    $requete = $connex->execute("INSERT INTO personnes(nom, prenom, adresse,cp,pays,societe)VALUES('test', 'test', 'test', '444', 'test', 'test')");

    
    
////    foreach($key in $array){        
//    }
//    $requete->execute(array(
//        "nom" => $bob[0]->getNom(),
//        "prenom" => $bob[0]->getPrenom(),
//        "adresse" => $bob[0]->getAdresse(),
//        "cp" => $bob[0]->getCp(),
//        "pays" => $bob[0]->getPays(),
//        "societe" => $bob[0]->getSociete(),
//    ));
    
//}