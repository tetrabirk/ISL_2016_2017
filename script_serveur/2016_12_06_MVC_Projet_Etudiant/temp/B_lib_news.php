<?php

function addNews($data){
    $titre              = convert2DB(htmlentities_utf8($data['titre']));
    $description        = convert2DB(htmlentitiesOutsideHTMLTags($data['description']));
    $img                = $data['img'];
    $projet_categorie_id= convert2DB(htmlentities_utf8($data['projet_categorie_id']));
    $admin_id           = convert2DB(htmlentities_utf8($data['admin_id']));

    $sql = "";

    if($img === ''){
       $sql .= "INSERT into news (titre, description, date_add, admin_id, projet_categorie_id)"
             . "VALUES('$titre', '$description',NOW(),'$admin_id','$projet_categorie_id')";
    }
    else{
        $sql .= "INSERT into news (titre, description, date_add, img, admin_id, projet_categorie_id)"
             . "VALUES('$titre', '$description',NOW(), '$img', '$admin_id','$projet_categorie_id')";
    }

    echo $sql;exit;
    $result = ExecRequete($sql);
    return $result;
                
}