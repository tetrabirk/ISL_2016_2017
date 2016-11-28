<?php
// include de la lib item contenant les fonctions nécessaires
include_once("lib/item.php");

if(!islogged()){
     header('Location: ?p=login');
}

// récupération des info pour la construction du menu
$result_menu = getItem(0);

//recup donnee session
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$getuser ="";



if(!islogged()){
    $view_file = 'login';
    
    
}else{
    header('Location: ?p=admin');
}

?>
