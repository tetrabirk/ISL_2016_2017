<?php
require_once __DIR__.'./src/Entity/Personne.php';
require_once __DIR__.'./src/Manager/PersonneManager.php';
require_once __DIR__.'./vendor/autoload.php';

$test = new \ISL\Manager\PersonneManager();

print_r($test->create(2));



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
