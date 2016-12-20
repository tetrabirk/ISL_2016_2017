<?php
// potection par login/projet_categorie_id
include_once("config/protect_admin.php");
// include de la lib item contenant les fonctions nécessaires
include_once("lib/projet.php");

// récupération des paramètres passés en GET
$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";
$get_projet_id    = isset($_GET["id"]) ? $_GET["id"] : 1;

// récupération des variables passées en POST

// declaration des variables
$msg_error ="";
$msg_end="";

switch($get_action){
    case 'view':
        $result_list= getprojet(0);
        $view_file = 'admin_projet_view';
        break;
    case 'add':
        $view_file = 'admin_projet_add_form';
}
?>