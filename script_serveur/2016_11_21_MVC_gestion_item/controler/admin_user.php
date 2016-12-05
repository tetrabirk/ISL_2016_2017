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

// récupération des valeurs get et post
$get_action     = isset($_GET["action"])    ? $_GET["action"]   : "view";
$get_id         = isset($_GET["id"])        ? $_GET["id"]       : "";
$post_nom       = isset($_POST["menu"])     ? $_POST["menu"]    : "";

$post_submit    = isset($_POST["submit"])   ? $_POST["submit"]  : "";
$post_nom       = isset($_POST["nom"])      ? $_POST["nom"]     : "";
$post_prenom    = isset($_POST["prenom"])   ? $_POST["prenom"]  : "";
$post_diplome   = isset($_POST["diplome"])  ? $_POST["diplome"] : "";
$post_parcours  = isset($_POST["parcours"]) ? $_POST["parcours"]: "";
$post_level     = isset($_POST["level"])    ? $_POST["level"]   : "";
$post_login     = isset($_POST["login"])    ? $_POST["login"]   : "";
$post_password  = isset($_POST["password"]) ? $_POST["password"]: "";
print_r($_FILES);

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
                    !empty($post_nom)
                    && !empty($post_prenom)
                    && !empty($post_login)
                    && !empty($post_password)
            ){
                if(insertUser($data_value)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $get_user       = getuser(0);
                $view_file      = "admin_user_add";

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
        
     
        
    case "update":
        $view_file      = "admin_user_update";
        
        $msg_error  = "";
        $msg_end    = "";
        
        $data_value             = array();       
        
        if(!empty($post_submit)){
            $data_value             = array();
            $data_value["nom"]      = $post_nom;
            $data_value["prenom"]   = $post_prenom;
            $data_value["diplome"]  = $post_diplome;
            $data_value["parcours"] = $post_parcours;
            $data_value["level"]    = $post_level;
            $data_value["login"]    = $post_login;
            $data_value["password"] = $post_password;
            if(
                    !empty($post_nom)
                    && !empty($post_prenom)
                    && !empty($post_login)
                                ){
                if(updateUser($data_value,$get_id)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $view_file      = "admin_user_update";

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
                
                $view_file = "admin_user_update";
            }
        }else{
            $get_user       = getuser($get_id);
            
            $data_value["nom"]      = $get_user[0]["nom"];
            $data_value["prenom"]   = $get_user[0]["prenom"];
            $data_value["diplome"]  = $get_user[0]["diplome"];
            $data_value["parcours"] = $get_user[0]["parcours"];
            $data_value["level"]    = $get_user[0]["level"];
            $data_value["login"]    = $get_user[0]["login"];
            
            $view_file = "admin_user_update";
        }
        
        break;
        
    case "show":
        user_visibility('show',$get_id);
         header('Location: ?p=admin_user');
         exit;
        
    case "hidden":
        user_visibility('hide',$get_id);
        header('Location: ?p=admin_user');
        exit;
    case "delete":
        user_delete($get_id);
        header('Location: ?p=admin_user');
        exit;
}

?>