<!--LEYENS Ludovic 24-01/2017-->
<?php

function uploadImg($file, $path="") {

    $r = array();
    $r['warnmsg'] = "";
    if (isset($file['name']) AND $file['name'] != "") {
        // création d'un nom qui sera attribué à l'image
        $photo      = date("YmdHis").".jpg";
        // fichier temporaire
        $tmp_file   = $file["tmp_name"];
        // Upload du fichier image
        if (is_uploaded_file($tmp_file)) {
            $size = getimagesize($tmp_file);
            //print_r($size);
            // Vérification de l'extension (2 = JPEG)
            if ($size[2] == 2) {
                // Upload et renommage
                move_uploaded_file($tmp_file, "upload/" .$path. $photo);
                $r['photo'] = $photo;
            } else {
                $r['warnmsg'] .= "<br />L'extension du fichier n'est pas valide.";
            }
        } else {
            $r['warnmsg'] .= "<br />Erreur lors de l'upload du fichier.";
        }
    } else {
        $r['warnmsg'] .= "<br />Pas d'image fournie.";
    }
    
    return $r;
}

?>