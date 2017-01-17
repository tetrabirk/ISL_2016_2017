<?php
// potection par login/projet_categorie_id
include_once("config/protect_admin.php");
// include de la lib item contenant les fonctions nécessaires
include_once("lib/news.php");
include_once("lib/projet.php");
// include de la lib tool images
include_once("lib/tools_img.php");

// récupération des paramètres passés en GET
$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";
$get_item_id    = isset($_GET["id"]) ? $_GET["id"] : 1;

// récupération des variables passées en POST
$post_titre                 = isset($_POST["titre"]) ? $_POST["titre"] : "";
$post_description           = isset($_POST["description"]) ? $_POST["description"] : "";
$post_projet_categorie_id   = isset($_POST["projet_categorie_id"]) ? $_POST["projet_categorie_id"] : "";
$post_img                   = isset($_FILES["photo"]) ? $_FILES["photo"] : "";
$post_submit                = isset($_POST["submit"]) ? $_POST["submit"] : "";


switch($get_action){
    case "view":
        $result_list    = getNews(0);
        $view_file      = "admin_news_view";
        break;
    
    case "add":
        $msg_error  = "";
        $msg_end    = "";
        
        $result_categorie = getProjetCategorie(0);
        
        $data_value                         = array();
        $data_value["liste_categorie"]      = $result_categorie;
        $data_value["titre"]                = $post_titre;
        $data_value["description"]          = $post_description;
        $data_value["projet_categorie_id"]  = $post_projet_categorie_id;
        $data_value["img"]                  = $post_img;
        
        if(!empty($post_submit)){
            
            if(!empty($post_titre) && !empty($post_projet_categorie_id)){
                if(insertNews($data_value)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $result_list    = getNews(0);
                $view_file      = "admin_news_view";
                
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_titre)){
                    $msg_error .= "titre manquant<br />";
                }
                if(empty($post_projet_categorie_id)){
                    $msg_error .= "catégorie non sélectionnée<br />";
                }
                
                $view_file = "admin_news_add_form";
            }
        }else{
            $view_file = "admin_news_add_form";
        }
        
        break;
    
    case "update":
        $msg_error = "";
        $msg_end = "";
        
        $result_categorie = getProjetCategorie(0);
        
        $data_value                         = array();
        $data_value["liste_categorie"]      = $result_categorie;
        $data_value["titre"]                = $post_titre;
        $data_value["description"]          = $post_description;
        $data_value["projet_categorie_id"]  = $post_projet_categorie_id;
        $data_value["img"]                  = $post_img;
        
        if(!empty($post_submit)){
            if(!empty($post_titre) && !empty($post_projet_categorie_id)){
                if(updateNews($data_value, $get_item_id)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "modification effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end .= "erreur lors de la modification";
                }
                
                $result_list    = getNews(0);
                $view_file      = "admin_news_view";
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_titre)){
                    $msg_error .= "titre manquant<br />";
                }
                if(empty($post_projet_categorie_id)){
                    $msg_error .= "catégorie non sélectionnée<br />";
                }
                $view_file = "admin_news_update_form";
            }
        }else{
            $result = getNews($get_item_id);
            if(is_array($result) && sizeof($result) > 0){
                $data_value                         = array();
                $data_value["liste_categorie"]      = $result_categorie;
                $data_value["titre"]                = convertFromDB($result[0]["titre"]);
                $data_value["description"]          = convertFromDB($result[0]["description"]);
                $data_value["projet_categorie_id"]  = convertFromDB($result[0]["projet_categorie_id"]);
                $data_value["img"]                  = convertFromDB($result[0]["img"]);
            }
            $view_file = "admin_news_update_form";
        }
        break;
    
    case "hidden":
        deleteActiveNews($get_item_id, "0");
        
        $result_list    = getNews(0);
        $view_file      = "admin_news_view";
        break;
    
    case "show":
        deleteActiveNews($get_item_id, "1");
        
        $result_list    = getNews(0);
        $view_file      = "admin_news_view";
        break;
}
?>