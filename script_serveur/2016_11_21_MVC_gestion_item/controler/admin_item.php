<?php
// include de la lib item contenant les fonctions nécessaires
include_once("lib/item.php");

// récupération des paramètres passés en GET
$get_action     = isset($_GET["action"]) ? $_GET["action"] : "view";
$get_item_id    = isset($_GET["id"]) ? $_GET["id"] : 1;

// récupération des variables passées en POST
$post_menu          = isset($_POST["menu"]) ? $_POST["menu"] : "";
$post_titre         = isset($_POST["titre"]) ? $_POST["titre"] : "";
$post_sous_titre    = isset($_POST["sous_titre"]) ? $_POST["sous_titre"] : "";
$post_description   = isset($_POST["description"]) ? $_POST["description"] : "";
$post_in_menu       = isset($_POST["in_menu"]) ? $_POST["in_menu"] : "1";
$post_submit        = isset($_POST["submit"]) ? $_POST["submit"] : "";


switch($get_action){
    case "view":
        $result_list    = getItem(0);
        $view_file      = "admin_item_view";
        break;
    
    case "add":
        $msg_error  = "";
        $msg_end    = "";
        
        $data_value                 = array();
        $data_value["menu"]         = $post_menu;
        $data_value["titre"]        = $post_titre;
        $data_value["sous_titre"]   = $post_sous_titre;
        $data_value["description"]  = $post_description;
        $data_value["in_menu"]      = $post_in_menu;
        
        if(!empty($post_submit)){
            
            if(!empty($post_menu) && !empty($post_titre) && !empty($post_description)){
                if(insertItem($data_value)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "insertion effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end = "erreur lors de l'insertion";
                }
                
                $result_list    = getItem(0);
                $view_file      = "admin_item_view";
                
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_menu)){
                    $msg_error .= "menu manquant<br />";
                }
                if(empty($post_titre)){
                    $msg_error .= "titre manquant<br />";
                }
                if(empty($post_description)){
                    $msg_error .= "description manquante<br />";
                }
                
                $view_file = "admin_item_add_form";
            }
        }else{
            $view_file = "admin_item_add_form";
        }
        
        break;
    
    case "update":
        $msg_error = "";
        $msg_end = "";
        
        $data_value                 = array();
        $data_value["menu"]         = $post_menu;
        $data_value["titre"]        = $post_titre;
        $data_value["sous_titre"]   = $post_sous_titre;
        $data_value["description"]  = $post_description;
        $data_value["in_menu"]      = $post_in_menu;
        
        if(!empty($post_submit)){
            if(!empty($post_menu) && !empty($post_titre) && !empty($post_description)){
                if(updateItem($data_value, $get_item_id)){
                    $msg_end .= "<i class=\"fa fa-check\"></i> <b>Succès</b><br />";
                    $msg_end .= "modification effectuée avec succès";
                }else{
                    $msg_end .= "<i class=\"fa fa-exclamation\"></i> <b>Succès</b><br />";
                    $msg_end .= "erreur lors de la modification";
                }
                
                $result_list    = getItem(0);
                $view_file      = "admin_item_view";
            }else{
                $msg_error .= "<i class=\"fa fa-exclamation-triangle\"></i> <b>Information(s) manquante(s)</b><br />";
                if(empty($post_menu)){
                    $msg_error .= "menu manquant<br />";
                }
                if(empty($post_titre)){
                    $msg_error .= "titre manquant<br />";
                }
                if(empty($post_description)){
                    $msg_error .= "description manquante<br />";
                }
                $view_file = "admin_item_update_form";
            }
        }else{
            $result = getItem($get_item_id);
            if(is_array($result) && sizeof($result) > 0){
                $data_value                 = array();
                $data_value["menu"]         = convertFromDB($result[0]["item_menu"]);
                $data_value["titre"]        = convertFromDB($result[0]["item_title"]);
                $data_value["sous_titre"]   = convertFromDB($result[0]["item_subtitle"]);
                $data_value["description"]  = convertFromDB($result[0]["item_description"]);
                $data_value["in_menu"]      = convertFromDB($result[0]["in_menu"]);
            }
            $view_file = "admin_item_update_form";
        }
        break;
    
    case "hidden":
        deleteActiveItem($get_item_id, "0");
        
        $result_list    = getItem(0);
        $view_file      = "admin_item_view";
        break;
    
    case "show":
        deleteActiveItem($get_item_id, "1");
        
        $result_list    = getItem(0);
        $view_file      = "admin_item_view";
        break;
}
?>