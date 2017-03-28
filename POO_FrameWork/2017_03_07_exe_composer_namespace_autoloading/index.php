<?php
require_once __DIR__.'./src/Entity/Personne.php';
require_once __DIR__.'./src/Manager/PersonneManager.php';
require_once __DIR__.'./vendor/autoload.php';



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


$test = new \ISL\Manager\PersonneManager();

$groupe = $test->create(5);

//bout de code pour affichage 

$html = '';

$html .="<table>";

foreach($groupe as $pers ){
    $html .= "<tr>";
    
    $html .=    "<td>";
    $html .=        $pers->getNom();
    $html .=    "</td>";
    
    $html .=    "<td>";
    $html .=        $pers->getPrenom();
    $html .=    "</td>";
    
    $html .=    "<td>";
    $html .=        $pers->getAdresse();
    $html .=    "</td>";
    
    $html .=    "<td>";
    $html .=        $pers->getCp();
    $html .=    "</td>";
    
    $html .=    "<td>";
    $html .=        $pers->getPays();
    $html .=    "</td>";
    
    $html .=    "<td>";
    $html .=        $pers->getSociete();
    $html .=    "</td>";
    
    $html .= "</tr>";
}

$html .="</table>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>POO & FRAMEWORK - exe 3</title>
    </head>
    <body>
        <?php echo $html; ?>
    </body>
</html>
