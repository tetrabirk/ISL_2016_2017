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

function getprojet($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "
            
                            AND PC. projet_id = $id;
                       
                ";
    }else{
        $sql = "SELECT  P.admin_id, P.date_add, P.description, P.is_visible, P.projet_id, P.sous_titre, P.titre,
                        A.nom, A.prenom,
                        PI.link_img, PI.projet_id
                        FROM projet AS P, admin AS A, projet_img AS PI
                            WHERE PI.projet_id = P.projet_id
                            AND A.admin_id = P.admin_id
                        GROUP BY P.projet_id
                        ORDER BY P.is_visible DESC, P.projet_id ASC;
            ";
    }
    return requeteResultat($sql);
    

}

?>