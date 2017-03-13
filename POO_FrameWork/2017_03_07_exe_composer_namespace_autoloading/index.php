<?php
require_once __DIR__.'./src/Entity/Personne.php';
require_once __DIR__.'./src/Manager/PersonneManager.php';
require_once __DIR__.'./vendor/autoload.php';



require_once __DIR__.'./src/database.php';
$test = new \ISL\Manager\PersonneManager();
$datas = $test->randomPerson();

$bob = new Personne();


$bob->hydrate($datas);

print_r($bob);


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO & FRAMEWORK - exe 3</title>
    </head>
    <body>
        
    </body>
</html>
