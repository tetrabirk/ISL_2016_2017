<?php
// include de la lib item contenant les fonctions nécessaires
include_once("lib/item.php");

// récupération des info pour la construction du menu
$result_menu = getItem(0);

//recup donnee session
$login = isset($_POST["login"]) ? $_POST["login"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

if (!empty($login)){
    $session_info = $_SESSION["user"];
    print_r($session_info);
    
}
session_destroy();
if(!islogged()){
    $view_file = 'login';
    echo "bbbbbbbbbbbbbbbbbbbbbbbipppper";
    
}else{
    header('Location: ?p=admin');
}

?>
