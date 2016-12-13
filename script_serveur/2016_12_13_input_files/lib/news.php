<?php

function getCategories(){
    $sql = "SELECT projet_categorie_id, categorie 
            FROM projet_categorie 
            WHERE is_visible = '1';";
    return requeteResultat($sql);
}

function getNews($id){
    if (!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql= "SELECT categorie, nom, prenom, news_id, titre, news.description, date_add, img, news.admin_id, news.projet_categorie_id, news.is_visible 
                FROM news 
                LEFT JOIN projet_categorie ON news.projet_categorie_id = projet_categorie.projet_categorie_id 
                JOIN admin ON news.admin_id = admin.admin_id 
                WHERE news_id=".$id;
    }else{
        $sql = "SELECT categorie, nom, prenom, news_id, titre, news.description, date_add, img, news.admin_id, news.projet_categorie_id, news.is_visible 
                FROM news 
                    LEFT JOIN projet_categorie ON news.projet_categorie_id = projet_categorie.projet_categorie_id 
                    JOIN admin ON news.admin_id = admin.admin_id 
                ORDER BY date_add";
        
    }
    return requeteResultat($sql);
}


function addNews($data){
    $titre              = convert2DB(htmlentities_utf8($data['titre']));
    $description        = convert2DB(htmlentitiesOutsideHTMLTags($data['description']));
    $img                = $data['img'];
    $projet_categorie_id= convert2DB(htmlentities_utf8($data['projet_categorie_id']));
    $admin_id           = convert2DB(htmlentities_utf8($data['admin_id']));

    // récupération du fichier image
    $upload = uploadImg($img, "news/");
    if(empty($upload['warnmsg'])){
        $img_name = $upload["photo"];
    }else{
        $img_name = "";
    }
    
    $sql = "";

//    if($img === ''){
//       $sql .= "INSERT into news (titre, description, date_add, admin_id, projet_categorie_id)"
//             . "VALUES('$titre', '$description',NOW(),'$admin_id','$projet_categorie_id')";
//    }
//    else{
        $sql .= "INSERT into news (titre, description, date_add, img, admin_id, projet_categorie_id)"
             . "VALUES('$titre', '$description',NOW(), '$img_name', '$admin_id','$projet_categorie_id')";
    //}

    //echo $sql;exit;
    $result = ExecRequete($sql);
    return $result;
                
}

function formNews($data, $method, $action) {
    $categories             = getCategories();
    $titre                  = $data["titre"];
    $description            = $data["description"];
    $img                    = $data["img"];
    $projet_categorie_id    = $data["projet_categorie_id"];
    
    
//    print_r($data);
    
    $form = "<form method='$method' action='$action' enctype='multipart/form-data'>
                <label for='titre'>Titre</label>
                <input type='text' name='titre' id='titre' value='$titre' />
                <label for='description'>Description</label>
                <textarea name='description' id='description'>$description</textarea>
                <label for='img'>Image</label>";
    if(!empty($img)){
        $form .= "<img class='img_form' src='upload/news/".$img."' alt='".$img."' />";
        
        $form .= "<a>bientot ici un bouton</a>
                 <br />";
    }

    $form.= "   <input type='file' name='img' id='img' value='$img' />
                <label for='projet_categorie_id'>Catégories</label>
                <select name='projet_categorie_id'>";
                foreach($categories as $val){
                    $form .= "<option name='id_cat' value='".$val["projet_categorie_id"]."'";
                    $form .= ($projet_categorie_id == $val["projet_categorie_id"]) ? " selected>" : ">";
                    $form .= $val["categorie"]."</option>";
                }
    $form .= "  </select>
                <br />
                <input type='submit' name='submit' />
            </form>";
    
    return $form;
}

?>
