<?php
// potection par login/password
include_once("config/protect_admin.php");
// include de la lib item contenant les fonctions nécessaires
include_once("lib/login.php");


// récupération des variables passées en POST
$post_old       = isset($_POST["old"]) ? $_POST["old"] : "";
$post_new       = isset($_POST["new"]) ? $_POST["new"] : "";
$post_confirm   = isset($_POST["confirm"]) ? $_POST["confirm"] : "";
$post_submit    = isset($_POST["submit"]) ? $_POST["submit"] : "";


$msg_error = "";
$msg_end = "";

if(!empty($post_submit)){
    if(!empty($post_old) && !empty($post_new) && !empty($post_confirm) && md5($post_old) == $_SESSION["admin_password"] && $post_new == $post_confirm){
        if(updatePassword($post_new, $_SESSION["admin_id"])){
            $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
            $msg_end .= "Mot de passe modifié avec succès";
            $_SESSION["admin_password"] = md5($post_new);
        }else{
            $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Erreur</b><br />";
            $msg_end .= "erreur lors de la modification";
        }
        
    }else{
        $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
        if(empty($post_old)){
            $msg_error .= "ancien mot de passe manquant<br />";
        }else{
            if(md5($post_old) != $_SESSION["admin_password"]){
                $msg_error .= "ancien mot de passe incorrect<br />";
            }
        }
        if(empty($post_new) || empty($post_confirm)){
            if(empty($post_new)){
                $msg_error .= "nouveau mot de passe manquant<br />";
            }
            if(empty($post_confirm)){
                $msg_error .= "confirmation manquante<br />";
            }
        }else{
            if($post_new != $post_confirm){
                $msg_error .= "votre nouveau mot de passe et la confirmation de celui-ci doivent être identiques<br />";
            }
        }
        
        $view_file = "admin_item_update_form";
    }
}else{
    
    
}

$view_file = "admin_password_form";
?>