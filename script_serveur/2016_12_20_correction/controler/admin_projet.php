<?php
// potection par login/projet_categorie_id
include_once("config/protect_admin.php");
// include de la lib item contenant les fonctions nécessaires
include_once("lib/projet.php");
// include de la lib tool images
include_once("lib/tools_img.php");

// récupération des paramètres passés en GET
$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";
$get_projet_id  = isset($_GET["id"]) ? $_GET["id"] : 1;

// récupération des variables passées en POST
$post_titre                 = isset($_POST["titre"]) ? $_POST["titre"] : "";
$post_sous_titre            = isset($_POST["sous_titre"]) ? $_POST["sous_titre"] : "";
$post_description           = isset($_POST["description"]) ? $_POST["description"] : "";
$post_projet_categorie_id   = isset($_POST["projet_categorie_id"]) ? $_POST["projet_categorie_id"] : array();
$post_submit                = isset($_POST["submit"]) ? $_POST["submit"] : "";


switch($get_action){
    case "view":
        $result_list    = getProjet(0);
        $view_file      = "admin_projet_view";
        break;
    
    case "add":
        $msg_error  = "";
        $msg_end    = "";
        
        $result_categorie = getProjetCategorie(0);
        
        $data_value                         = array();
        $data_value["liste_categorie"]      = $result_categorie;
        $data_value["titre"]                = $post_titre;
        $data_value["sous_titre"]           = $post_sous_titre;
        $data_value["description"]          = $post_description;
        $data_value["projet_categorie_id"]  = $post_projet_categorie_id;
        
        if(!empty($post_submit)){
            
            if(!empty($post_titre) && !empty($post_description) && sizeof($post_projet_categorie_id) > 0){
                if(insertProjet($data_value)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $result_list    = getProjet(0);
                $view_file      = "admin_projet_view";
                
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_titre)){
                    $msg_error .= "titre manquant<br />";
                }
                if(empty($post_description)){
                    $msg_error .= "description manquant<br />";
                }
                if(sizeof($post_projet_categorie_id) == 0){
                    $msg_error .= "catégorie non sélectionnée<br />";
                }
                
                $view_file = "admin_projet_add_form";
            }
        }else{
            $view_file = "admin_projet_add_form";
        }
        
        break;
    
    case "update":
        $msg_error = "";
        $msg_end = "";
        
        $result_categorie = getProjetCategorie(0);
        
        $data_value                         = array();
        $data_value["liste_categorie"]      = $result_categorie;
        $data_value["titre"]                = $post_titre;
        $data_value["sous_titre"]           = $post_sous_titre;
        $data_value["description"]          = $post_description;
        $data_value["projet_categorie_id"]  = $post_projet_categorie_id;
        
        if(!empty($post_submit)){
            if(!empty($post_titre) && !empty($post_projet_categorie_id) && sizeof($post_projet_categorie_id) > 0){
                if(updateProjet($data_value, $get_projet_id)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "modification effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end .= "erreur lors de la modification";
                }
                
                $result_list    = getProjet(0);
                $view_file      = "admin_projet_view";
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_titre)){
                    $msg_error .= "titre manquant<br />";
                }
                if(empty($post_description)){
                    $msg_error .= "description manquant<br />";
                }
                if(sizeof($post_projet_categorie_id) == 0){
                    $msg_error .= "catégorie non sélectionnée<br />";
                }
                $view_file = "admin_projet_update_form";
            }
        }else{
            $result = getProjet($get_projet_id);
            if(is_array($result) && sizeof($result) > 0){
                $recup_cat_id = array_column(getCategorieByProjet($get_projet_id), "projet_categorie_id");
                
                print_r($recup_cat_id);
                $data_value                         = array();
                $data_value["liste_categorie"]      = $result_categorie;
                $data_value["titre"]                = convertFromDB($result[0]["titre"]);
                $data_value["sous_titre"]            = convertFromDB($result[0]["sous_titre"]);
                $data_value["description"]          = convertFromDB($result[0]["description"]);
                $data_value["projet_categorie_id"]  = $recup_cat_id;
            }
            $view_file = "admin_projet_update_form";
        }
        break;
    
    case "hidden":
        deleteActiveProjet($get_projet_id, "0");
        
        $result_list    = getProjet(0);
        $view_file      = "admin_projet_view";
        break;
    
    case "show":
        deleteActiveProjet($get_projet_id, "1");
        
        $result_list    = getProjet(0);
        $view_file      = "admin_projet_view";
        break;
}
?>