<?php
// include de la lib item contenant les fonctions nécessaires
include_once("lib/item.php");
// récupération des info pour la construction du menu
$result_menu = getItem(0);
//unlog?
$unlog = isset($_GET["log"]) ? true : "";
if ($unlog){
    logOut();
}
//recup donnee session
$login = isset($_POST["login"]) ? $_POST["login"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$getuser ="";

if (!empty($login)){
    $getuser =get_user($login,$password);
    if(is_array($getuser)){
        $session_info = $getuser;
    }else{
        $error = $getuser;
    }
    
    
}

if(!islogged()){
    $view_file = 'login';
    
    
}else{
    header('Location: ?p=admin');
}

?>
