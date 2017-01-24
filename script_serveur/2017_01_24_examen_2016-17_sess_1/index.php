<!--LEYENS Ludovic 24-01/2017-->
<?php
session_start();
include_once("config/config.php");

// récupération du paramètre p -> page controler
$get_p = isset($_GET["p"]) ? $_GET["p"] : "admin";

// vérification de l'existence de cette page dans le dossier controler
if(file_exists("controler/".$get_p.".php")){
    // si le fichier existe, il est inclus
    include_once("controler/".$get_p.".php");
}else{
    // sinon le script courant est arrêté et un message d'erreur est affiché
    exit("<h1>Erreur !</h1><p>La page que vous tentez d'afficher n'existe pas !</p>");
}

include_once("include/admin_head.php");

?>

    <body>
        <?php
        include_once("include/admin_layout.php");
        ?>
    </body>
</html>

