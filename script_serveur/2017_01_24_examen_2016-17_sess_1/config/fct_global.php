<!--LEYENS Ludovic 24-01/2017-->
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

function htmlentitiesOutsideHTMLTags($htmlText){
    $matches    = Array();
    $sep        = '###HTMLTAG###';

    preg_match_all("@<[^>]*>@", $htmlText, $matches);   
    $tmp = preg_replace("@(<[^>]*>)@", $sep, $htmlText);
    $tmp = explode($sep, $tmp);

    for ($i=0; $i<count($tmp); $i++)
        $tmp[$i] = htmlentities_utf8($tmp[$i]);

    $tmp = join($sep, $tmp);

    for ($i=0; $i<count($matches[0]); $i++)
        $tmp = preg_replace("@$sep@", $matches[0][$i], $tmp, 1);
    
    // uniquement dans le cas du tinymce qui converti automatiquement en entités html
    $change = array("&amp;" => "&");
    $tmp    = strtr($tmp, $change);
    
    return $tmp;
}

function is_email($s){
    return filter_var($s, FILTER_VALIDATE_EMAIL);
}

?>