<?php
// include de la lib item contenant les fonctions nécessaires
include_once("lib/item.php");
include_once("lib/admin_tools.php");

if(!islogged()){
     header('Location: ?p=login');
}
$view_file = 'admin_user_view';
$error ="";
// récupération des info pour la construction du menu
$result_menu = getItem(0);



// récupération de l'action
$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";
//C4EST ICI QUE TU EST ARRIV222
//
//sdfhsdfh
//
//sdfhsdf
//
//dfh
//dfhsdf
//
$post_nom          = isset($_POST["menu"]) ? $_POST["menu"] : "";

switch($get_action){
    case "view":
        // récupération du tableau admin
        $get_user       = getuser(0);
        $view_file      = "admin_user_view";
        break;
    
    case "add":
        $view_file      = "admin_user_add";
        
        $msg_error  = "";
        $msg_end    = "";
        
        $data_value             = array();
        $data_value["nom"]      = $post_nom;
        $data_value["prenom"]   = $post_prenom;
        $data_value["diplome"]  = $post_diplome;
        $data_value["parcours"] = $post_parcours;
        $data_value["level"]    = $post_level;
        $data_value["login"]    = $post_login;
        $data_value["password"] = $post_password;
        
        if(!empty($post_submit)){
            
            if(
                    !empty($post_menu)
                    && !empty($post_nom)
                    && !empty($post_prenom)
                    && !empty($post_login)
                    && !empty($post_password)
            ){
                if(insertItem($data_value)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $get_user       = getuser(0);
                $view_file      = "admin_user_view";

            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_nom)){
                    $msg_error .= "nom manquant<br />";
                }
                if(empty($post_prenom)){
                    $msg_error .= "prenom manquant<br />";
                }
                if(empty($post_login)){
                    $msg_error .= "login manquante<br />";
                }
                if(empty($post_password)){
                    $msg_error .= "password manquante<br />";
                }
                $view_file = "admin_user_add";
            }
        }else{
            $view_file = "admin_user_add";
        }
        
        break;
        
}

?>