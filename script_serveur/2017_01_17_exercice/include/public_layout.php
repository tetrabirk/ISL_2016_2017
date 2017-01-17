   
        <div class='full' id='top'>
            <div class='row container'>
                <div class="six columns">
                    <img src="images/content/logo_public.png" alt="logo architecte" />
                </div>
                <div class="six columns" id='top_info'>
                    <p>architecte@isl.be <i>-</i> 0486 00 00 00</p>
                    <h2>Atelier d'architecture Saint Laurent</h2>
                    <p>Rue Saint Laurent 33 <i>-</i> 4000 Liège <a href='' title='contacter notre atelier'>contactez-nous</a></p>
                </div>
            </div>
        </div>
<?php
    include_once('menu.php'); 
    
    
    
    // vérification de l'existence du fichier view déclaré dans le controler sous la variable $view_file
            if(isset($view_file) && file_exists("view/".$view_file.".php")){
                if($view_file == 'home'){
                    include_once("view/".$view_file.".php");
                }else{
                    echo "<div class='container' id='content'>";
                    // si le fichier existe, il est inclus
                    include_once("view/".$view_file.".php");
                    echo "</div>";
                }
            }else{
                // sinon le script courant est arrêté et un message d'erreur est affiché
                exit("<h1>Erreur d'affichage !</h1>");
            }
            
?>




        
    