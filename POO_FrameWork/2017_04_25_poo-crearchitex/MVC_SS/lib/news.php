<?php
function getNews($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "SELECT news_id, titre, description, date_add, admin_id, projet_categorie_id, is_visible, img 
                FROM news 
                WHERE news_id = $id;
                ";
    }else{
        $sql = "SELECT news_id, titre, a.description, DATE_FORMAT(date_add, '%d/%m/%Y') as date_add, a.admin_id, projet_categorie_id, a.is_visible, img, categorie, nom, prenom 
                FROM news a 
                    LEFT JOIN projet_categorie b USING (projet_categorie_id) 
                    JOIN admin c ON a.admin_id = c.admin_id 
                ORDER BY is_visible DESC, titre ASC, description ASC;
                ";
    }
    return requeteResultat($sql);
}


function insertNews($data){
    $titre                  = convert2DB(htmlentities_utf8($data["titre"]));
    $description            = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    $projet_categorie_id    = intval($data["projet_categorie_id"]);
    $img_file               = $data["img"];
    
    $admin_id               = $_SESSION["admin_id"];
    
    // récupération du fichier image
    $upload = uploadImg($img_file, "news/");
    if(empty($upload['warnmsg'])){
        $img_name = $upload["photo"];
    }else{
        $img_name = "";
    }
    
    $sql = "INSERT INTO news 
                (titre, description, date_add, admin_id, projet_categorie_id, img)
            VALUES 
                ('$titre', '$description', NOW(), $admin_id, $projet_categorie_id, '$img_name');
        ";
    
    return ExecRequete($sql);
}

function updateNews($data, $id){
    $id                     = intval($id);
    $titre                  = convert2DB(htmlentities_utf8($data["titre"]));
    $description            = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    $projet_categorie_id    = intval($data["projet_categorie_id"]);
    $img_file               = $data["img"];
    
    // récupération du fichier image
    $upload = uploadImg($img_file, "news/");
    if(empty($upload['warnmsg'])){
        $img_name = $upload["photo"];
    }else{
        $img_name = "";
    }
    
    $cond_img       = !empty($img_name) ? " img = '$img_name', " : "";
    
    $sql = "UPDATE news 
                SET titre               = '$titre', 
                    description         = '$description', 
                    $cond_img
                    projet_categorie_id = '$projet_categorie_id' 
            WHERE news_id = $id;
        ";
    
    return ExecRequete($sql);
}

function deleteActiveNews($id, $visible){
    if(!is_numeric($id)){
        return false;
    }
    $id = intval($id);
    if($id > 0){
        $sql = "UPDATE news 
                SET 
                    is_visible = '$visible' 
                WHERE news_id = $id;";
        return ExecRequete($sql) ? true : false;
    }else{
        return false;
    }
    
}


function formNews($data, $action, $method){
    // extraction des données hors du tableau data et association à des variables
    // -> plus de facilité pour appel dans les values
    $liste_categorie        = $data["liste_categorie"];
    $titre                  = $data["titre"];
    $description            = $data["description"];
    $projet_categorie_id    = $data["projet_categorie_id"];
    $photo                  = $data["img"];
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\" enctype=\"multipart/form-data\">\n";
        // champ titre
        $form .= "<label for=\"titre\">Titre</label>\n";
        $form .= "<input type=\"text\" id=\"titre\" name=\"titre\" value=\"".$titre."\" class=\"u-full-width\" /><br />\n";
        // champ description
        $form .= "<label for=\"description\">Description</label>\n";
        $form .= "<textarea id=\"description\" name=\"description\" class=\"u-full-width\">".$description."</textarea><br />\n";
        
        $option = "<option value=\"\">=== choix ===</option>";
        if(is_array($liste_categorie) && sizeof($liste_categorie) > 0){
            foreach($liste_categorie as $ligne_db){
                $cat_id     = $ligne_db["projet_categorie_id"];
                $categorie  = $ligne_db["categorie"];
                $is_visible = $ligne_db["is_visible"];
                
                $checked = $projet_categorie_id == $cat_id ? " selected=\"selected\"" : "";
                
                $option .= $is_visible == "1" ? "<option value=\"$cat_id\"$checked>$categorie</option>\n" : "";
            }
        }
        // champ categorie
        $form .= "<label for=\"projet_categorie_id\">Catégorie</label>\n";
        $form .= "<select id=\"projet_categorie_id\" name=\"projet_categorie_id\" class=\"u-full-width\">\n";
        $form .= $option;
        $form .= "</select><br />\n";
        
        // champ img
        $form .= "<label for=\"photo\">Photo</label>\n";
        $form .= !empty($photo) ? "<img src=\"upload/news/".$photo."\" class=\"preview_pic\" /><br />\n" : "";
        $form .= "<input type=\"file\" id=\"photo\" name=\"photo\" value=\"\" class=\"u-full-width\" /><br />\n";
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}

?>