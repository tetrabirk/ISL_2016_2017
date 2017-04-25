<?php
// potection par login/projet_categorie_id
include_once("config/protect_admin.php");
// include de la lib item contenant les fonctions nécessaires
include_once("lib/projet.php");

// récupération des paramètres passés en GET
$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";
$get_projet_categorie_id    = isset($_GET["id"]) ? $_GET["id"] : 1;

// récupération des variables passées en POST
$post_categorie             = isset($_POST["categorie"]) ? $_POST["categorie"] : "";
$post_description           = isset($_POST["description"]) ? $_POST["description"] : "";
$post_submit                = isset($_POST["submit"]) ? $_POST["submit"] : "";


switch($get_action){
    case "view":
        $result_list    = getProjetCategorie(0);
        $view_file      = "admin_projet_categorie_view";
        break;
    
    case "add":
        $msg_error  = "";
        $msg_end    = "";
        
        $data_value                         = array();
        $data_value["categorie"]            = $post_categorie;
        $data_value["description"]          = $post_description;
        
        if(!empty($post_submit)){
            
            if(!empty($post_categorie)){
                if(insertProjetCategorie($data_value)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $result_list    = getProjetCategorie(0);
                $view_file      = "admin_projet_categorie_view";
                
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_categorie)){
                    $msg_error .= "categorie manquante<br />";
                }
                
                $view_file = "admin_projet_categorie_add_form";
            }
        }else{
            $view_file = "admin_projet_categorie_add_form";
        }
        
        break;
    
    case "update":
        $msg_error = "";
        $msg_end = "";
        
        
        $data_value                         = array();
        $data_value["categorie"]            = $post_categorie;
        $data_value["description"]          = $post_description;
        
        if(!empty($post_submit)){
            if(!empty($post_categorie)){
                if(updateProjetCategorie($data_value, $get_projet_categorie_id)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "modification effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end .= "erreur lors de la modification";
                }
                
                $result_list    = getProjetCategorie(0);
                $view_file      = "admin_projet_categorie_view";
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_categorie)){
                    $msg_error .= "categorie manquante<br />";
                }
                $view_file = "admin_projet_categorie_update_form";
            }
        }else{
            $result = getProjetCategorie($get_projet_categorie_id);
            if(is_array($result) && sizeof($result) > 0){
                $data_value                         = array();
                $data_value["categorie"]            = convertFromDB($result[0]["categorie"]);
                $data_value["description"]          = convertFromDB($result[0]["description"]);
            }
            $view_file = "admin_projet_categorie_update_form";
        }
        break;
    
    case "hidden":
        deleteActiveProjetCategorie($get_projet_categorie_id, "0");
        
        $result_list    = getProjetCategorie(0);
        $view_file      = "admin_projet_categorie_view";
        break;
    
    case "show":
        deleteActiveProjetCategorie($get_projet_categorie_id, "1");
        
        $result_list    = getProjetCategorie(0);
        $view_file      = "admin_projet_categorie_view";
        break;
}
?>