<?php

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
    $img = $data["img"];
    $projet_categorie_id = $data["projet_categorie_id"];
    $form = "<form method=\"$method\" action=\"$action\" enctype=\"multipart/form-data\">
        <label for=\"titre\">Titre</label>
        <input type=\"text\" name=\"titre\" id=\"titre\" value=\"$titre\" />
        <label for=\"description\">Description</label>
        <textarea name=\"description\" id=\"description\">$description</textarea>
        <label for=\"img\">Image</label>
        <input type=\"file\" name=\"img\" id=\"img\" value=\"$img\" />
        <label for=\"projet_categorie_id\">Catégories</label>
        <select id=\"projet_categorie_id\">";
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
