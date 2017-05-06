<?php
//autoload
function chargerClasse($classe)
{
  require $classe . '.php'; 
}
spl_autoload_register('chargerClasse');

$exception ="";

//connexion pdo

try{
    $db = new PDO('mysql:host=localhost;dbname=poo_php','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $db->exec("SET CHARACTER SET utf8");
}catch(\PDOException $exception){
    //une erreur s'est produite
    echo 'catastrophe! '. $exception->getMessage();
}

////==============================================================================
//$request = $db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages');
//while ($donnees = $request->fetch(PDO::FETCH_ASSOC)){
//    $perso = new Personnage;
//    $perso->hydrate($donnees);
//
//}
////================================================================================

$perso = new Personnage([
    'nom' => 'Victor',
    'forcePerso' => 5,
    'degats' => 0,
    'niveau' => 1,
    'experience' =>4 
]);



$manager = new PersonnagesManager($db);
//
//echo "<br/>var dump perso<br/>";
//var_dump($perso);
$manager->add($perso); //n'ajoute pas d'élément à ma db mais ne retourne pas d'erreur non plus
$list = $manager->getList(); //retourne un array avec 3 éléments (comme dans ma db) mais tout est vide (NULL).

var_dump($list);