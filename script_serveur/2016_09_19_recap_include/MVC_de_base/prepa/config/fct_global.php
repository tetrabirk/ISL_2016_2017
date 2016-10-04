<?php
function convert2DB($string){
    global $mysqli;
    
    return $mysqli->real_escape_string(trim($string));
}

function convertFromDB($txt){
    return stripslashes($txt);
}

function htmlentities_utf8($s){
    return htmlentities($s, ENT_QUOTES, "UTF-8");
}

function htmlentity_decode_utf8($s){
    return html_entity_decode($s, ENT_QUOTES, "UTF-8");
}
?>