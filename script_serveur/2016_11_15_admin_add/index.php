<?php
include_once("config/config.php");

// récupération du paramètre p -> page controler
$get_p = isset($_GET["p"]) ? $_GET["p"] : "item";

// vérification de l'existence de cette page dans le dossier controler
if(file_exists("controler/".$get_p.".php")){
    // si le fichier existe, il est inclus
    include_once("controler/".$get_p.".php");
}else{
    // sinon le script courant est arrêté et un message d'erreur est affiché
    exit("<h1>Erreur !</h1><p>La page que vous tentez d'afficher n'existe pas !</p>");
}

// include du <head> html
include_once("include/head.php");

?>

    <body>
        <?php
        if(preg_match("/^admin/i", $get_p)) {
            include_once("include/admin_menu.php");
        }else{
            include_once("include/menu.php");
        }
        ?>
        
        <div class='container' id='content'>
            <?php
            // vérification de l'existence du fichier view déclaré dans le controler sous la variable $view_file
            if(isset($view_file) && file_exists("view/".$view_file.".php")){
                // si le fichier existe, il est inclus
                include_once("view/".$view_file.".php");
            }else{
                // sinon le script courant est arrêté et un message d'erreur est affiché
                exit("<h1>Erreur d'affichage !</h1>");
            }
            ?>
            
        </div>
        
        <?php
        include_once("include/footer.php");
        ?>
    </body>
</html>