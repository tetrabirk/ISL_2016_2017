<?php

include 'lib/news.php';
include 'lib/tools_img.php';


$get_action = isset($_GET['action']) ? $_GET['action'] : 'view';

$data = array();

$data['titre'] = isset($_POST['titre']) ? $_POST['titre'] : "";
$data['description'] = isset($_POST['description']) ? $_POST['description'] : "";
$data['projet_categorie_id'] = isset($_POST['projet_categorie_id']) ? $_POST['projet_categorie_id'] : "";
$data['submit'] = isset($_POST['submit']) ? $_POST['submit'] : "";
$data['admin_id'] =  $_SESSION['user'][0]['admin_id'];
$data['img'] = '';
$msg_error = '';
$msg_end = '';

switch ($get_action) {
    
    case "view" :
        $result_list = getNews(0);
        $view_file = "admin_news_view";
        break;


    case 'add' :
        $method="post";
        $action="?p=admin_news&action=add";

        if ($data['submit'] !== '') {
            if (!empty($data['titre']) && !empty($data['projet_categorie_id'])) {

                //Est-ce qu'une image existe ?             
                if (isset($_FILES) && $_FILES['img']['tmp_name']) {

                    
                    //Chemin pour les images de news
                    $path = 'news/';

                    //Populate data
                    $data['img'] = $_FILES['img']['tmp_name'];
                }
                
                //Ajout d'une news
                if (addNews($data)) {
                    //Upload de l'image
                    if (isset($data['img'])) {
                        $err_img = uploadImg($_FILES['img'], $path);

                        $msg_error .= isset($err_img['warnmsg']) ? $err_img['warnmsg'] : '';
                    }

                    $msg_end .= "insertion réussie";
                    $result_list = getNews(0);
                    $view_file = "admin_news_view";
                    
                } else {
                    $msg_error .="erreur d'insertion";
                    $view_file = 'admin_news_add_form';
                }
            } else {
                if (empty($data['titre'])) {
                    $msg_error .= 'Titre manquant';
                }
                
                if (empty($data['projet_categorie_id'])) {
                    $msg_error .= 'Categorie manquante';
                }
                $view_file = 'admin_news_add_form';
            }
        } else {
            $view_file = 'admin_news_add_form';
        }

        break;
}

    

