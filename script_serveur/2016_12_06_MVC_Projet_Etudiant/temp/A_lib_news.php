<?php

function getNews($id){
    if (!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql= "";//pas notre partie
    }else{
        $sql= "SELECT categorie, nom, prenom, news_id, titre, description, date_add, img, admin_id, projet_categorie_id, is_visible"
                . "FROM news "
                . " LEFT JOIN projet_categorie ON news.projet_categorie_id = projet_categorie.projet_categorie_id"
                . " JOIN admin ON news.admin_id = admin.admin_id"
                . " ORDER BY date_add";
    }
    return ExecRequete($sql);
}

?>
