<?php
require_once __DIR__ . './src/Entity/Personne.php';
require_once __DIR__ . './src/Entity/Etudiant.php';
require_once __DIR__ . './src/Entity/Enseignant.php';
require_once __DIR__ . './src/Manager/PersonneManager.php';
require_once __DIR__ . './src/Manager/EntityManager.php';
require_once __DIR__ . './src/Manager/EtudiantManager.php';
require_once __DIR__ . './src/Manager/EnseignantManager.php';
require_once __DIR__ . './vendor/autoload.php';



$exception = "";
try {
    $connex = new PDO('mysql:host=localhost;dbname=poo_php', 'root', '');
    $connex->exec("SET CHARACTER SET utf8");
} catch (\PDOException $exception) {
    //une erreur s'est produite
    echo 'catastrophe! ' . $exception->getMessage();
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


$test = new \ISL\Manager\EtudiantManager($connex);
//$testteacher = new \ISL\Manager\EnseignantManager($connex);



$groupea = $test->create(5);
//$groupeb = $test->createStudent(3);
//$groupec = $testteacher->createTeacher(2);


$groupe = $groupea;
//$groupe = array_merge($groupea, $groupeb, $groupec);

//bout de code pour affichage 

$html = '';

$html .="<table>";

foreach ($groupe as $pers) {
    $html .= "<tr>";
    $html .="<td>";
    $temp = explode("\\", get_class($pers));
    $html .= end($temp);
    $html .="</td>";

    $html .= "<td>";
    $html .= $pers->getNom();
    $html .= "</td>";

    $html .= "<td>";
    $html .= $pers->getPrenom();
    $html .= "</td>";

    $html .= "<td>";
    $html .= $pers->getAdresse();
    $html .= "</td>";

    $html .= "<td>";
    $html .= $pers->getCp();
    $html .= "</td>";

    $html .= "<td>";
    $html .= $pers->getPays();
    $html .= "</td>";

    $html .= "<td>";
    $html .= $pers->getSociete();
    $html .= "</td>";

    if (get_class($pers) == 'ISL\Entity\Etudiant') {

        $html .="<td>";
        $html .= implode(", ", $pers->getCoursSuivis());
        $html .="</td>";

        $html .="<td>";
        $html .= $pers->getNiveau();
        $html .="</td>";

        $html .="<td>";
        $html .= $pers->getDateDInscription()->format('d/m/Y');
        $html .="</td>";
    }
    if(get_class($pers) == 'ISL\Entity\Enseignant') {
        $html .="<td>";
        $html .= implode(", ", $pers->getCoursDonnes());
        $html .="</td>";

        $html .="<td>";
        $html .= $pers->getAnciennete();
        $html .="</td>";

        $html .="<td>";
        $html .= $pers->getEntreeEnService()->format('d/m/Y');
        $html .="</td>";
    }

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
