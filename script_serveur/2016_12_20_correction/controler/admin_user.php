<?php
// potection par login/password
include_once("config/protect_admin.php");
// include de la lib item contenant les fonctions nécessaires
include_once("lib/user.php");
// include de la lib tool images
include_once("lib/tools_img.php");

// récupération des paramètres passés en GET
$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";
$get_item_id    = isset($_GET["id"]) ? $_GET["id"] : 1;

// récupération des variables passées en POST
$post_nom       = isset($_POST["nom"]) ? $_POST["nom"] : "";
$post_prenom    = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$post_diplome   = isset($_POST["diplome"]) ? $_POST["diplome"] : "";
$post_parcours  = isset($_POST["parcours"]) ? $_POST["parcours"] : "";
$post_level     = isset($_POST["level"]) ? $_POST["level"] : "2";
$post_login     = isset($_POST["login"]) ? $_POST["login"] : "";
$post_password  = isset($_POST["password"]) ? $_POST["password"] : "";
$post_img       = isset($_FILES["photo"]) ? $_FILES["photo"] : "";
$post_submit    = isset($_POST["submit"]) ? $_POST["submit"] : "";


switch($get_action){
    case "view":
        $result_list    = getUser(0);
        $view_file      = "admin_user_view";
        break;
    
    case "add":
        $msg_error  = "";
        $msg_end    = "";
        
        $data_value              = array();
        $data_value["nom"]       = $post_nom;
        $data_value["prenom"]    = $post_prenom;
        $data_value["diplome"]   = $post_diplome;
        $data_value["parcours"]  = $post_parcours;
        $data_value["level"]     = $post_level;
        $data_value["login"]     = $post_login;
        $data_value["password"]  = $post_password;
        $data_value["img"]       = $post_img;
        
        if(!empty($post_submit)){
            
            if(!empty($post_nom) && !empty($post_prenom) && !empty($post_login) && !empty($post_password) && !empty($post_diplome)){
                if(insertUser($data_value)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $result_list    = getUser(0);
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
                    $msg_error .= "mot de passe manquante<br />";
                }
                if(empty($post_diplome)){
                    $msg_error .= "diplome manquante<br />";
                }
                
                $view_file = "admin_user_add_form";
            }
        }else{
            $view_file = "admin_user_add_form";
        }
        
        break;
    
    case "update":
        $msg_error = "";
        $msg_end = "";
        
        $data_value              = array();
        $data_value["nom"]       = $post_nom;
        $data_value["prenom"]    = $post_prenom;
        $data_value["diplome"]   = $post_diplome;
        $data_value["parcours"]  = $post_parcours;
        $data_value["level"]     = $post_level;
        $data_value["login"]     = $post_login;
        $data_value["password"]  = $post_password;
        $data_value["img"]       = $post_img;
        
        if(!empty($post_submit)){
            if(!empty($post_nom) && !empty($post_prenom) && !empty($post_login) && !empty($post_diplome)){
                if(updateUser($data_value, $get_item_id)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "modification effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end .= "erreur lors de la modification";
                }
                
                $result_list    = getUser(0);
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
                if(empty($post_diplome)){
                    $msg_error .= "diplome manquante<br />";
                }
                $view_file = "admin_user_update_form";
            }
        }else{
            $result = getUser($get_item_id);
            if(is_array($result) && sizeof($result) > 0){
                $data_value                 = array();
                $data_value["nom"]          = convertFromDB($result[0]["nom"]);
                $data_value["prenom"]       = convertFromDB($result[0]["prenom"]);
                $data_value["diplome"]      = convertFromDB($result[0]["diplome"]);
                $data_value["parcours"]     = convertFromDB($result[0]["parcours"]);
                $data_value["level"]        = convertFromDB($result[0]["level"]);
                $data_value["login"]        = convertFromDB($result[0]["login"]);
                $data_value["photo"]        = convertFromDB($result[0]["photo"]);
                $data_value["password"]     = "";
            }
            $view_file = "admin_user_update_form";
        }
        break;
    
    case "hidden":
        deleteActiveUser($get_item_id, "0");
        
        $result_list    = getUser(0);
        $view_file      = "admin_user_view";
        break;
    
    case "show":
        deleteActiveUser($get_item_id, "1");
        
        $result_list    = getUser(0);
        $view_file      = "admin_user_view";
        break;
}
?>