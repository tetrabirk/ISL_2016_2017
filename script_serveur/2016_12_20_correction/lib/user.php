<?php
function getUser($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "SELECT admin_id, nom, prenom, login, password, parcours, diplome, level, is_visible, photo 
                FROM admin
                WHERE admin_id = $id;
                ";
    }else{
        $sql = "SELECT admin_id, nom, prenom, login, password, parcours, diplome, level, is_visible, photo 
                FROM admin 
                ORDER BY is_visible DESC, nom ASC, prenom ASC;
                ";
    }
    return requeteResultat($sql);
}


function insertUser($data){
    $nom        = convert2DB(htmlentities_utf8($data["nom"]));
    $prenom     = convert2DB(htmlentities_utf8($data["prenom"]));
    $diplome    = convert2DB(htmlentities_utf8($data["diplome"]));
    $login      = convert2DB($data["login"]);
    $password   = convert2DB($data["password"]);
    $parcours   = convert2DB(htmlentitiesOutsideHTMLTags($data["parcours"]));
    $level      = convert2DB($data["level"]);
    $img_file   = $data["img"];
    
    // récupération du fichier image
    $upload = uploadImg($img_file, "profil/");
    if(empty($upload['warnmsg'])){
        $img_name = $upload["photo"];
    }else{
        $img_name = "";
    }
    
    $sql = "INSERT INTO admin 
                (nom, prenom, diplome, login, password, parcours, level, photo)
            VALUES 
                ('$nom', '$prenom', '$diplome', '$login', MD5('$password'), '$parcours', '$level', '$img_name');
        ";
    
    return ExecRequete($sql);
}

function updateUser($data, $id){
    $id         = intval($id);
    $nom        = convert2DB(htmlentities_utf8($data["nom"]));
    $prenom     = convert2DB(htmlentities_utf8($data["prenom"]));
    $diplome    = convert2DB(htmlentities_utf8($data["diplome"]));
    $login      = convert2DB($data["login"]);
    $password   = convert2DB($data["password"]);
    $parcours   = convert2DB(htmlentitiesOutsideHTMLTags($data["parcours"]));
    $level      = convert2DB($data["level"]);
    $img_file   = $data["img"];
    
    // récupération du fichier image
    $upload = uploadImg($img_file, "profil/");
    if(empty($upload['warnmsg'])){
        $img_name = $upload["photo"];
    }else{
        $img_name = "";
    }
    
    $cond_password  = !empty($password) ? " password = MD5('$password'), " : "";
    $cond_img       = !empty($img_name) ? " photo = '$img_name', " : "";
    
    $sql = "UPDATE admin 
                SET nom         = '$nom', 
                    prenom      = '$prenom', 
                    diplome     = '$diplome', 
                    login       = '$login', 
                    parcours    = '$parcours', 
                    $cond_password
                    $cond_img
                    level       = '$level' 
            WHERE admin_id = $id;
        ";
    
    return ExecRequete($sql);
}

function deleteActiveUser($id, $visible){
    if(!is_numeric($id)){
        return false;
    }
    $id = intval($id);
    if($id > 0){
        $sql = "UPDATE admin 
                SET 
                    is_visible = '$visible' 
                WHERE admin_id = $id;";
        return ExecRequete($sql) ? true : false;
    }else{
        return false;
    }
    
}

function formUser($data, $action, $method){
    // extraction des données hors du tableau data et association à des variables
    // -> plus de facilité pour appel dans les values
    $nom        = $data["nom"];
    $prenom     = $data["prenom"];
    $diplome    = $data["diplome"];
    $parcours   = $data["parcours"];
    $level      = $data["level"];
    $login      = $data["login"];
    $password   = $data["password"];
    $photo      = $data["photo"];
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\" enctype=\"multipart/form-data\">\n";
        // champ nom
        $form .= "<label for=\"nom\">Nom</label>\n";
        $form .= "<input type=\"text\" id=\"nom\" name=\"nom\" value=\"".$nom."\" class=\"u-full-width\" /><br />\n";
        // champ prenom
        $form .= "<label for=\"prenom\">Prénom</label>\n";
        $form .= "<input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"".$prenom."\" class=\"u-full-width\" /><br />\n";
        // champ diplôme
        $form .= "<label for=\"diplome\">Diplôme</label>\n";
        $form .= "<input type=\"text\" id=\"diplome\" name=\"diplome\" value=\"".$diplome."\" class=\"u-full-width\" /><br />\n";
        // champ parcours
        $form .= "<label for=\"parcours\">Parcours</label>\n";
        $form .= "<textarea id=\"parcours\" name=\"parcours\" class=\"u-full-width\">".$parcours."</textarea><br />\n";
        // champ level
        $check_1 = $level == "1" ? " checked=\"checked\"" : "";
        $check_2 = $level == "2" ? " checked=\"checked\"" : "";
        $form .= "<label for=\"level\">Niveau d'autorisation</label>\n";
        $form .= "<input type=\"radio\" id=\"level\" name=\"level\" value=\"1\"".$check_1." /> Super administrateur<br />\n";
        $form .= "<input type=\"radio\" id=\"level\" name=\"level\" value=\"2\"".$check_2." /> Administrateur<br />\n";
        // champ login
        $form .= "<label for=\"login\">Login</label>\n";
        $form .= "<input type=\"text\" id=\"login\" name=\"login\" value=\"".$login."\" class=\"u-full-width\" /><br />\n";
        // champ password
        $form .= "<label for=\"password\">Mot de passe</label>\n";
        $form .= "<input type=\"password\" id=\"password\" name=\"password\" value=\"".$password."\" class=\"u-full-width\" /><br />\n";
        // champ img
        $form .= "<label for=\"photo\">Photo</label>\n";
        $form .= !empty($photo) ? "<img src=\"upload/profil/".$photo."\" class=\"preview_pic\" /><br />\n" : "";
        $form .= "<input type=\"file\" id=\"photo\" name=\"photo\" value=\"\" class=\"u-full-width\" /><br />\n";
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}

?>