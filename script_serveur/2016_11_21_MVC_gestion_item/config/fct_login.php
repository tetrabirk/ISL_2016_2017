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
        $error .= "erreur dans le login ou le mot de passe";
        return $error;
    }else{
        $_SESSION['user'] = $answer;
    }
    
    
}

function logOut(){
    session_destroy();
}

?>


