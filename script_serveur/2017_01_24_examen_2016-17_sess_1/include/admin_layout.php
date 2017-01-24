<!--LEYENS Ludovic 24-01/2017-->
        <?php
        include_once("include/admin_menu.php");
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