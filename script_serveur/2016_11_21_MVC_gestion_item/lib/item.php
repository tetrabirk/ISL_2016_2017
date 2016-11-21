<?php
function getItem($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "SELECT item_id, item_menu, item_title, item_subtitle, item_description, in_menu, is_visible 
                FROM item
                WHERE item_id = $id;
                ";
    }else{
        $sql = "SELECT item_id, item_menu, item_title, item_subtitle, item_description, in_menu, is_visible 
                FROM item 
                ORDER BY is_visible DESC, order_position ASC;
                ";
    }
    return requeteResultat($sql);
}


function formItem($data, $action, $method){
    // extraction des données hors du tableau data et association à des variables
    // -> plus de facilité pour appel dans les values
    $menu           = $data["menu"];
    $titre          = $data["titre"];
    $sous_titre     = $data["sous_titre"];
    $description    = $data["description"];
    $in_menu        = $data["in_menu"];
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\">\n";
        // champ menu
        $form .= "<label for=\"menu\">Menu</label>\n";
        $form .= "<input type=\"text\" id=\"menu\" name=\"menu\" value=\"".$menu."\" class=\"u-full-width\" /><br />\n";
        // champ titre
        $form .= "<label for=\"titre\">Titre</label>\n";
        $form .= "<input type=\"text\" id=\"titre\" name=\"titre\" value=\"".$titre."\" class=\"u-full-width\" /><br />\n";
        // champ sous-titre
        $form .= "<label for=\"sous_titre\">Sous-titre</label>\n";
        $form .= "<input type=\"text\" id=\"sous_titre\" name=\"sous_titre\" value=\"".$sous_titre."\" class=\"u-full-width\" /><br />\n";
        // champ description
        $form .= "<label for=\"description\">Description</label>\n";
        $form .= "<textarea id=\"description\" name=\"description\" class=\"u-full-width\">".$description."</textarea><br />\n";
        // champ in_menu
        $check_oui = $in_menu == "1" ? " checked=\"checked\"" : "";
        $check_non = $in_menu == "0" ? " checked=\"checked\"" : "";
        $form .= "<label for=\"in_menu\">Présent dans le menu</label>\n";
        $form .= "<input type=\"radio\" id=\"in_menu\" name=\"in_menu\" value=\"1\"".$check_oui." /> oui<br />\n";
        $form .= "<input type=\"radio\" id=\"in_menu\" name=\"in_menu\" value=\"0\"".$check_non." /> non<br />\n";
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}

function insertItem($data){
    $menu           = convert2DB(htmlentities_utf8($data["menu"]));
    $titre          = convert2DB(htmlentities_utf8($data["titre"]));
    $sous_titre     = convert2DB(htmlentities_utf8($data["sous_titre"]));
    $description    = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    $in_menu        = convert2DB(htmlentitiesOutsideHTMLTags($data["in_menu"]));
    
    $sql = "INSERT INTO item 
                (item_menu, item_title, item_subtitle, item_description, in_menu)
            VALUES 
                ('$menu', '$titre', '$sous_titre', '$description', '$in_menu');
        ";
    
    return ExecRequete($sql);
}

function updateItem($data, $id){
    $id             = intval($id);
    $menu           = convert2DB(htmlentities_utf8($data["menu"]));
    $titre          = convert2DB(htmlentities_utf8($data["titre"]));
    $sous_titre     = convert2DB(htmlentities_utf8($data["sous_titre"]));
    $description    = convert2DB(htmlentitiesOutsideHTMLTags($data["description"]));
    $in_menu        = convert2DB(htmlentitiesOutsideHTMLTags($data["in_menu"]));
    
    $sql = "UPDATE item 
                SET item_menu           = '$menu', 
                    item_title          = '$titre', 
                    item_subtitle       = '$sous_titre', 
                    item_description    = '$description', 
                    in_menu             = '$in_menu' 
            WHERE item_id = $id;
        ";
    
    return ExecRequete($sql);
}

function deleteActiveItem($id, $visible){
    if(!is_numeric($id)){
        return false;
    }
    $id = intval($id);
    if($id > 0){
        $sql = "UPDATE item 
                SET 
                    is_visible = '$visible' 
                WHERE item_id = $id;";
        return ExecRequete($sql) ? true : false;
    }else{
        return false;
    }
    
}


?>