<?php
// potection par login/password
include_once("config/protect_admin.php");

include 'lib/news.php';
include 'lib/tools_img.php';

$get_action = isset($_GET['action']) ? $_GET['action'] : 'view';
$get_news_id = isset($_GET['id']) ? $_GET['id'] : 1;
$ses_admin_id               = $_SESSION['admin_id'];


//recup du post
$post_titre         = isset($_POST['titre']) ? $_POST['titre'] : "";
$post_description   = isset($_POST['description']) ? $_POST['description'] : "";
$post_proj_cat_id   = isset($_POST['projet_categorie_id']) ? $_POST['projet_categorie_id'] : "";
$post_submit        = isset($_POST['submit']) ? $_POST['submit'] : "";
$post_img           = isset($_FILES["img"]) ? $_FILES["img"] : "";

switch ($get_action) {
    case "view" :
        $result_list = getNews(0);
        $view_file = "admin_news_view";
        break;
    
    case 'add' :
        $msg_error                      = '';
        $msg_end                        = '';
        
        $data = array();

        $data['titre']                  = $post_titre;
        $data['description']            = $post_description;
        $data['projet_categorie_id']    = $post_proj_cat_id;
        $data['submit']                 = $post_submit;
        $data['admin_id']               = $ses_admin_id;
        $data['img']                    = $post_img;
       

        if ($data['submit'] !== '') {
            if (!empty($data['titre']) && !empty($data['projet_categorie_id'])) {
                /*
                //Est-ce qu'une image existe ?             
                if (isset($_FILES) && $_FILES['img']['tmp_name']) {
                    
                    //Chemin pour les images de news
                    $path = 'news/';
                    //Populate data
                    $data['img'] = $name;
                }
                */
                
                //Ajout d'une news
                if (addNews($data)) {
                    /*
                    //Upload de l'image
                    if (isset($data['img'])) {
                        $err_img = uploadImg($_FILES['img'], $path);

                        $msg_error .= isset($err_img['warnmsg']) ? $err_img['warnmsg'] : '';
                    }
                    */
                    $result_list = getNews(0);
                    $msg_end .= "insertion réussie";
                    $view_file = "admin_news_view";
                } else {
                    $msg_error .="erreur d'insertion";
                    $view_file = 'admin_news_add';
                }
            } else {
                if (empty($data['titre'])) {
                    $msg_error .= 'Titre manquant';
                }
                if (!empty($data['projet_categorie_id'])) {
                    $msg_error .= 'Categorie manquante';
                }
                $view_file = 'admin_news_add_form';
            }
        } else {
            $view_file = 'admin_news_add_form';
        }
        
        break;
    case 'update':
        $msg_error = "";
        $msg_end = "";
        
        $data = array();
        $data['titre']                  = $post_titre;
        $data['description']            = $post_description;
        $data['projet_categorie_id']    = $post_proj_cat_id;
        $data['admin_id']               = $ses_admin_id;
        $data['img']                    = $post_img;
        $data['submit']                 = $post_submit;
        
        
        
        //cas 1: premier chargement du form, afficher les anciennes données
        if(empty($post_submit)){
            $result = getNews($get_news_id);
            $data = array();
            $data['titre']                  = convertFromDB($result[0]['titre']);
            $data['description']            = convertFromDB($result[0]['description']);
            $data['projet_categorie_id']    = convertFromDB($result[0]['projet_categorie_id']);
            $data['admin_id']               = convertFromDB($result[0]['admin_id']);
            $data['img']                    = convertFromDB($result[0]['img']);
            $view_file = 'admin_news_add_form';

        //cas 2: formulaire remplis 
        }else{
            //a: tt les champs obligatoire sont remplis        
            if(!empty($data['titre'])&&!empty($data[''])){
//                if( ){
// C4EST CIIC QUE TEST ARRIV222222222222222
//                }
                if (addNews($data)) {
                    $result_list = getNews(0);
                    $msg_end .= "insertion réussie";
                    $view_file = "admin_news_view";
                } else {
                    $msg_error .="erreur d'insertion";
                    $view_file = 'admin_news_add';
                }   
            }
        }
                //A: il y avait déjà une image
                    //1:on ne change pas l'image
                    //2:nouvelle image
                //B: il n'y avait pas d'image
                    //1:on ajoute pas d'image
                    //2:nouvelle image
            //b: avec erreurs
                //titre manquant
                //categorie manquante
        
        
        
        break;
}


?>