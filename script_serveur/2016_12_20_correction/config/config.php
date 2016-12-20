<?php
// definition les parametres d'acces à la db
define("DB_NOM", "root");
define("DB_PASS", "root");
define("DB_SERVEUR", "localhost");
define("DB_BASE", "isl_2016_php");

define("DEBUG", true);

// on inclus les accès aux fonctions
include_once('fct_db.php');
include_once('fct_global.php');


// connexion à la base de donnnées
$mysqli = Connexion(DB_NOM, DB_PASS, DB_BASE, DB_SERVEUR);

?>
