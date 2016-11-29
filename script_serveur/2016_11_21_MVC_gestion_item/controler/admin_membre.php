<?php
// include de la lib item contenant les fonctions nécessaires
include_once("lib/item.php");
include_once("lib/admin_tools.php");

if(!islogged()){
     header('Location: ?p=login');
}
$view_file = 'admin_membre';
$error ="";
// récupération des info pour la construction du menu
$result_menu = getItem(0);

//recup donnee session

$sess_user=$_SESSION["user"][0];

//recup action

$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";

switch($get_action){
    case "view":
        $get_user= getuser($sess_user['admin_id']);
        $view_file      = "admin_membre";
        
        
        break;

    case "mdp":
        $view_file  = "admin_membre_mdp";
        $apassword  = isset($_POST["apassword"])    ?   $_POST["apassword"] : ""; //ancien mdp
        $npassword  = isset($_POST["npassword"])    ?   $_POST["npassword"] : ""; //nouveau mdp
        $rpassword  = isset($_POST["rpassword"])    ?   $_POST["rpassword"] : ""; //repeat mdp
        
        $post_submit        = isset($_POST["submit"]) ? $_POST["submit"] : "";
                
        if(
            !empty($post_submit)
            &&!empty($apassword)
            &&!empty($npassword)
            &&!empty($rpassword)
            &&md5($apassword) == $sess_user["password"]
            &&$npassword == $rpassword
                
        ){
            editpassword($sess_user["admin_id"], $npassword);
            $_SESSION["user"][0]["password"]=md5($npassword);
            $error .= "<p class='msg_ok'><i class=\"fa fa-check-triangle\"></i> <b>SUCCÈS</b><br />";
            $error .= "youpie mot de passe modifié</p>";
                        
            

            
        }else{
            if(empty($post_submit)){
                break;
            }elseif(md5($apassword) != $sess_user["password"]){
                $error .= "<p class='msg_error'><i class=\"fa fa-exclamation-triangle\"></i> <b>ERREUR</b><br />";
                $error .= "mauvais mot de passe :(</p>";
                
            }elseif(empty($apassword)||empty($npassword)||empty($rpassword)){
                $error .= "<p class='msg_error'><i class=\"fa fa-exclamation-triangle\"></i> <b>ERREUR</b><br />";
                $error .= "tu n'as pas complété tout les champs :(</p>";
            }elseif($npassword != $rpassword){
                $error .= "<p class='msg_error'><i class=\"fa fa-exclamation-triangle\"></i> <b>ERREUR</b><br />";
                $error .= "tu as fait une erreur dans ton nouveau mot de passe</p>";
            }
            
        }
        
}