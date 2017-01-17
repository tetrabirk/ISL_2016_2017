<?php
function getProjetCategorie($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "SELECT projet_categorie_id, categorie, description, is_visible 
                FROM projet_categorie 
                WHERE projet_categorie_id = $id;
                ";
    }else{
        $sql = "SELECT projet_categorie_id, categorie, description, is_visible 
                FROM projet_categorie 
                ORDER BY is_visible DESC, categorie ASC, description ASC;
                ";
    }
    return requeteResultat($sql);
}


function formProjetCategorie($data, $action, $method){
    // extraction des données hors du tableau data et association à des variables
    // -> plus de facilité pour appel dans les values
    $categorie      = $data["categorie"];
    $description    = $data["description"];
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\">\n";
        // champ categorie
        $form .= "<label for=\"categorie\">Catégorie</label>\n";
        $form .= "<input type=\"text\" id=\"categorie\" name=\"categorie\" value=\"".$categorie."\" class=\"u-full-width\" /><br />\n";
        // champ description
        $form .= "<label for=\"description\">Description</label>\n";
        $form .= "<textarea id=\"description\" name=\"description\" class=\"u-full-width\">".$description."</textarea><br />\n";
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}

function insertProjetCategorie($data){
    $categorie      = convert2DB(htmlentities_utf8($data["categorie"]));
    $description    = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    
    $sql = "INSERT INTO projet_categorie 
                (categorie, description)
            VALUES 
                ('$categorie', '$description');
        ";
    
    return ExecRequete($sql);
}

function updateProjetCategorie($data, $id){
    $id             = intval($id);
    $categorie          = convert2DB(htmlentities_utf8($data["categorie"]));
    $description    = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    
    $sql = "UPDATE projet_categorie 
                SET categorie   = '$categorie', 
                    description = '$description' 
            WHERE projet_categorie_id = $id;
        ";
    
    return ExecRequete($sql);
}

function deleteActiveProjetCategorie($id, $visible){
    if(!is_numeric($id)){
        return false;
    }
    $id = intval($id);
    if($id > 0){
        $sql = "UPDATE projet_categorie 
                SET 
                    is_visible = '$visible' 
                WHERE projet_categorie_id = $id;";
        return ExecRequete($sql) ? true : false;
    }else{
        return false;
    }
    
}


function getProjet($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "SELECT projet_id, titre, sous_titre, description, date_add, admin_id, is_visible 
                FROM projet 
                WHERE projet_id = $id;
                ";
    }else{
        $sql = "SELECT projet_id, titre, sous_titre, description, date_add, admin_id, is_visible 
                FROM projet 
                ORDER BY is_visible DESC, titre ASC;
                ";
    }
    return requeteResultat($sql);
}

function getCategorieByProjet($id){
    if(!is_numeric($id)){
        return false;
    }
    
    $sql = "SELECT projet_categorie_id 
            FROM projet_categorie_cross 
            WHERE projet_id = $id;
            ";
    
    return requeteResultat($sql);
}


function formProjet($data, $action, $method){
    // extraction des données hors du tableau data et association à des variables
    // -> plus de facilité pour appel dans les values
    $liste_categorie        = $data["liste_categorie"];
    $titre                  = $data["titre"];
    $sous_titre             = $data["sous_titre"];
    $description            = $data["description"];
    $projet_categorie_id    = $data["projet_categorie_id"];
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\" enctype=\"multipart/form-data\">\n";
        // champ titre
        $form .= "<label for=\"titre\">Titre *</label>\n";
        $form .= "<input type=\"text\" id=\"titre\" name=\"titre\" value=\"".$titre."\" class=\"u-full-width\" /><br />\n";
        
        // champ sous-titre
        $form .= "<label for=\"sous_titre\">Sous-titre *</label>\n";
        $form .= "<input type=\"text\" id=\"sous_titre\" name=\"sous_titre\" value=\"".$sous_titre."\" class=\"u-full-width\" /><br />\n";
        
        // champ description
        $form .= "<label for=\"description\">Description *</label>\n";
        $form .= "<textarea id=\"description\" name=\"description\" class=\"u-full-width\">".$description."</textarea><br />\n";
        
        $option = "";
        if(is_array($liste_categorie) && sizeof($liste_categorie) > 0){
            foreach($liste_categorie as $ligne_db){
                $cat_id     = $ligne_db["projet_categorie_id"];
                $categorie  = $ligne_db["categorie"];
                $is_visible = $ligne_db["is_visible"];
                
                $checked = in_array($cat_id, $projet_categorie_id) ? " checked=\"checked\"" : "";
                
                $option .= $is_visible == "1" ? "<input type='checkbox' name=\"projet_categorie_id[]\" value=\"$cat_id\"$checked /> $categorie \n<br />" : "";
            }
        }
        // champ categorie
        $form .= "<label for=\"projet_categorie_id\">Catégorie(s) *</label>\n";
        $form .= $option."\n";
        
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}

function insertProjet($data){
    $titre                  = convert2DB(htmlentities_utf8($data["titre"]));
    $sous_titre             = convert2DB(htmlentities_utf8($data["sous_titre"]));
    $description            = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    $projet_categorie_id    = $data["projet_categorie_id"];
    
    $admin_id               = $_SESSION["admin_id"];
    
    
    $sql = "INSERT INTO projet 
                (titre, sous_titre, description, date_add, admin_id)
            VALUES 
                ('$titre', '$sous_titre', '$description', NOW(), $admin_id);
        ";
    
    if(ExecRequete($sql)){
        $dernier_projet_id = last_insert_id();
        if(is_array($projet_categorie_id)){
            foreach($projet_categorie_id as $pc_id){
                $pc_id = intval($pc_id);
                $sql_2 = "INSERT INTO projet_categorie_cross 
                            (projet_id, projet_categorie_id) 
                        VALUE 
                            ($dernier_projet_id, $pc_id);
                    ";
                ExecRequete($sql_2);
            }
        }
        return true;
    }else{
        return false;
    }
}

function updateProjet($data, $id){
    $id                     = intval($id);
    $titre                  = convert2DB(htmlentities_utf8($data["titre"]));
    $sous_titre             = convert2DB(htmlentities_utf8($data["sous_titre"]));
    $description            = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    $projet_categorie_id    = $data["projet_categorie_id"];
    
    $sql = "UPDATE projet 
                SET titre               = '$titre', 
                    sous_titre          = '$sous_titre', 
                    description         = '$description' 
            WHERE projet_id = $id;
        ";
    
    if(ExecRequete($sql)){
        $sql_delete = "DELETE FROM projet_categorie_cross WHERE projet_id = $id;";
        if(ExecRequete($sql_delete)){
            if(is_array($projet_categorie_id)){
                foreach($projet_categorie_id as $pc_id){
                    $pc_id = intval($pc_id);
                    $sql_2 = "INSERT INTO projet_categorie_cross 
                                (projet_id, projet_categorie_id) 
                            VALUE 
                                ($id, $pc_id);
                        ";
                    ExecRequete($sql_2);
                }
            }
        }
        return true;
    }else{
        return false;
    }
}

function deleteActiveProjet($id, $visible){
    if(!is_numeric($id)){
        return false;
    }
    $id = intval($id);
    if($id > 0){
        $sql = "UPDATE projet 
                SET 
                    is_visible = '$visible' 
                WHERE projet_id = $id;";
        return ExecRequete($sql) ? true : false;
    }else{
        return false;
    }
    
}

?>