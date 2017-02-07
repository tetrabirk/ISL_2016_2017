<?php
require_once __DIR__.'/POO_FM_02_exe_eleve.php';
require_once __DIR__.'/POO_FM_02_exe_adresse.php';
require_once __DIR__.'/POO_FM_02_exe_formatter.php';

$ludo = new Eleve();
$ludo->setNomComplet('ludovic','leyens');

$adresse = new Adresse();
$adresse->setAdresse('Quai Churchill','5','4020','Liege');
$ludo->setAdresse($adresse);


$eleve2 = new Eleve();

$adresse = new Adresse();
$adresse->setAdresse('quelquepar','10','1000','BXL');
$eleve2->setAdresse($adresse);

echo Formatter:: formatEleve($ludo);
echo Formatter:: formatEleve($eleve2);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO et FRAMEWORK INTRO</title>
    </head>
    <body>

    </body>
</html>
