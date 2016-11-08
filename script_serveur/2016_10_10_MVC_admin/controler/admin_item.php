<?php
    include_once 'lib/item.php';
    
    // récupération des info pour la construction du menu
    $result_menu = getItem(0);

    
    $get_action= isset($_GET["action"]) ? $_GET["action"] : "view";
    
    switch($get_action){
        case "view":
            $result_view = getItem(0);
            $view_file="admin_item_view";
            break;
        case "update":
            $view_file="admin_item_update";
            break;
        case "add":
            $post_menu = isset($_POST['menu'])              ?   $_POST['menu']          : '';
            $post_titre = isset($_POST['titre'])            ?   $_POST['titre']         : '';
            $post_soustitre = isset($_POST['soustitre'])    ?   $_POST['soustitre']     : '';
            $post_description = isset($_POST['description'])?   $_POST['description']   : '';
            
            $post_submit = isset($_POST['submit'])          ?   $_POST['submit']        : '';
            
            if(!empty($post_submit)){
                if(!empty($post_menu)&&!empty($post_titre)&&!empty($post_soustitre)&&!empty($post_description)){
                    $result_view =getItem(0);
                    $view_file="admin_item_view";
                }else{
                    echo "formulaire non envoyé, formulaire non complet";
                    $view_file="admin_item_add";
                }
            }else{
                $view_file="admin_item_add";
            }
           
            break;
           
    }
  
?>