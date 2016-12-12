<?php

function addNews($data){
    $titre              = convert2DB(htmlentities_utf8($data['titre']));
    $description        = convert2DB(htmlentitiesOutsideHTMLTags($data['description']));
    $img                = $data['img'];
    $projet_categorie_id= convert2DB(htmlentities_utf8($data['projet_categorie_id']));
    $admin_id           = convert2DB(htmlentities_utf8($data['admin_id']));

    $sql = "";

    
    $sql .= "INSERT into news (titre, description, date_add, img, admin_id, projet_categorie_id)"
         . "VALUES('$titre', '$description',NOW(), '$img', '$admin_id','$projet_categorie_id')";
    

    
    $result = ExecRequete($sql);
    return $result;
                
}



function getNews($id){
    if (!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql= "";//pas notre partie
    }else{
        $sql= "SELECT PC.categorie, a.nom, a.prenom, n.news_id, n.titre, n.description, n.date_add, n.img, n.admin_id, pc.projet_categorie_id, n.is_visible 
                FROM news AS n 
                LEFT JOIN projet_categorie AS pc ON n.projet_categorie_id = pc.projet_categorie_id 
                JOIN admin AS a ON n.admin_id = a.admin_id 
                ORDER BY date_add";
    }
    return requeteResultat($sql);
}


function getCategories(){
        $sql = "SELECT projet_categorie_id, categorie 
                FROM projet_categorie 
                WHERE is_visible = '1';";
    return requeteResultat($sql);
}

function formNews($data, $method, $action) {
    $categories = getCategories();
    $titre = $data["titre"];
    $description = $data["description"];
    $img = isset($data["img"]) ? $data["img"] : "";
    $projet_categorie_id = $data["projet_categorie_id"];
    $form = "<form method=\"$method\" action=\"$action\" enctype=\"multipart/form-data\">
        <label for=\"titre\">Titre</label>
        <input type=\"text\" name=\"titre\" id=\"titre\" value=\"$titre\" />
        <label for=\"description\">Description</label>
        <textarea name=\"description\" id=\"description\">$description</textarea>
        <label for=\"img\">Image</label>
        <input type=\"file\" name=\"img\" id=\"img\" value=\"$img\" />
        <label for=\"projet_categorie_id\">Catégories</label>
        <select name=\"projet_categorie_id\">";
            foreach($categories as $val){
                $form .= "<option name=\"id_cat\" value=\"".$val["projet_categorie_id"]."\"";
                $form .= ($projet_categorie_id == $val["projet_categorie_id"]) ? " selected>" : ">";
                $form .= $val["categorie"]."</option>";
            }
        $form .= "</select>
            <br />
            <input type=\"submit\" name=\"submit\" />
            </form>";
    return $form;
}

?>