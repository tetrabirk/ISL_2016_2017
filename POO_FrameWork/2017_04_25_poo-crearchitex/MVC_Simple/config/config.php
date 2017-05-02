
<?php
// definition les parametres d'acces à la db
namespace Crearchitex\Config;

define("DB_NOM", "root");
define("DB_PASS", "");
define("DB_SERVEUR", "localhost");
define("DB_BASE", "isl_2016_php");


$pdo = new \PDO('mysql:dbname=DB_NOM ; host= DB_SERVEUR', 'DB_NOM', 'DB_PASS');

return $pdo;
