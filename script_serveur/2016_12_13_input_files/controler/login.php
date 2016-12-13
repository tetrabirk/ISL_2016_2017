<?php
// include des libs nécessaires
include_once("lib/item.php");
include_once("lib/login.php");

$post_login     = isset($_POST["login"]) ? $_POST["login"] : NULL;
$post_password  = isset($_POST["password"]) ? $_POST["password"] : NULL;
$post_submit    = isset($_POST["submit"]) ? $_POST["submit"] : NULL;

$msg = "";

$result_page = getItem(6);

if (!$post_login || !$post_password || !is_email($post_login)) {
    if ($post_submit) {
        $msg .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s) ou erronée(s)</b><br />";
        if (!$post_login) {
            $msg .= "&rarr; Login obligatoire<br />";
        }else{
            if(!is_email($post_login)){
                $msg .= "&rarr; Login non valide<br />";
            }
        }
        if (!$post_password) {
            $msg .= "&rarr; Mot-de-passe obligatoire<br />";
        }

    }
    // définition de la vue à afficher
    $view_file = "login_form";
} else {
    $result = verifLogin($post_login, $post_password);
    
    
    
    if (is_array($result) && sizeof($result) > 0){
        
        $l_admin_id     = convertFromDB($result[0]["admin_id"]);
        $l_nom          = convertFromDB($result[0]["nom"]);
        $l_prenom       = convertFromDB($result[0]["prenom"]);
        $l_access_level = convertFromDB($result[0]["level"]);
        $l_is_visible   = convertFromDB($result[0]["is_visible"]);
        
        if($l_is_visible == "1"){
            $_SESSION["admin_id"]       = $l_admin_id;
            $_SESSION["admin_login"]    = $post_login;
            $_SESSION["admin_password"] = md5($post_password);
            $_SESSION["admin_nom"]      = $l_nom;
            $_SESSION["admin_prenom"]   = $l_prenom;
            $_SESSION["admin_level"]    = $l_access_level;
            
            $msg .= "&rarr; Connexion établie avec succès.<br />\n";
            $page = "admin_home";
            // définition de la vue à afficher
            $view_file = "admin_home";
            
            // re-définition du paramètre $get_p pour afficher le menu admin et non le menu public
            // -> voir index ligne 24
            $get_p = "admin";
            
        }else{
            $msg .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s) ou erronée(s)</b><br />";
            $msg .= "&rarr; Le compte lié au login $post_login a été désactivé !<br />\n";
            // définition de la vue à afficher
            $view_file = "login_form";
        }
        
        
    }else{
        $msg .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s) ou erronée(s)</b><br />";
        $msg .= "&rarr; Oupsss... utilisateur non valide....<br />\n";
        // définition de la vue à afficher
        $view_file = "login_form";
    }

}



// récupération des info pour la construction du menu
$result_menu = getItem(0);

?>