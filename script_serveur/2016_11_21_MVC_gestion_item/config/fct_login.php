<?php
function islogged(){
    return isset($_SESSION['user']);
}

function get_user($login,$password){
    $error ="";
    $sql ="";
    $sql .="SELECT admin_id, login, password, nom, prenom, level ";
    $sql .="FROM admin ";
    $sql .="WHERE login = '$login' ";
    $sql .="AND password = '".md5($password)."';";
    
    $answer = requeteResultat($sql);
    
    if(!$answer){
        $error .= "<p class='msg_error'><i class=\"fa fa-exclamation-triangle\"></i> <b>ERREUR</b><br />";
        $error .= "erreur dans le login ou le mot de passe</p>";
        return $error;
    }else{
        $_SESSION['user'] = $answer;
        return $answer;
    }
    
    
}

function logOut(){
    session_destroy();
}

?>


