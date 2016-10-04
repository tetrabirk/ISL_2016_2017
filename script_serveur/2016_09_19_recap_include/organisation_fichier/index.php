<?php

//config -> configuration
//controler-> (traitement, etc,... pas de HTML)
//lib -> fct par module
//view -> affichage
//
//          ┌
//          │1)config
//INDEX     ┤2)controler
//          │3)view
//          └
//


// /?p=home

include_once('config/congig.php');
$get_p = isset($_GET['p']) ? $_GET['p'] : 'defaut';

if(file_exists("controler/".$get_p."php")){
    include_once("controler/".$get_p);
}else{
    exit("controler inexistant");
}

?>
<html>
    <head>
        
    </head>
    <body>
        <?php
        if(isset($view_file)&&file.exists("view/".$view_file.".php")){
            include_once("view/".$view_file.".php");
        }else{
            //ERROR
        }
        ?>
    </body>
</html>