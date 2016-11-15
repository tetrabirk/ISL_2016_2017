<?php
    include_once 'lib/item.php';
    
    // récupération des info pour la construction du menu
    $result_menu = getItem(0);

    
    $get_action= isset($_GET["action"]) ? $_GET["action"] : "view";
    
    
    switch($get_action){
        //page view
        case "view":
            $result_view = getItem(0);
            $view_file="admin_item_view";
            break;
        //page update
        case "update":
            $view_file="admin_item_update";
            break;
        //page ajout
        case "add":
            //recuperation des donnée dans le post et insertion dans le tableau $data
            $data['menu']       = $post_menu        = isset($_POST['menu'])         ?   $_POST['menu']          : '';
            $data['titre']      = $post_titre       = isset($_POST['titre'])        ?   $_POST['titre']         : '';
            $data['soustitre']  = $post_soustitre   = isset($_POST['soustitre'])    ?   $_POST['soustitre']     : '';
            $data['description']= $post_description = isset($_POST['description'])  ?   $_POST['description']   : '';

            $post_submit = isset($_POST['submit'])          ?   $_POST['submit']        : '';
            //initialisation de error
            $error='';
            //si le formulaire a déjà été envoyé une fois ($submit not empty)
            if(!empty($post_submit)){
                if(!empty($post_menu)&&!empty($post_titre)&&!empty($post_soustitre)&&!empty($post_description)){
                    $result_view =getItem(0);
                    $view_file="admin_item_view";
                    $error .= "ben comment j'ai atterri ici moi?";
                }else{                    
                    if(empty($post_menu)){
                        $error .= "Menu est vide </br>";
                    }
                    if(empty($post_titre)){
                        $error .= "Titre est vide </br>";
                    }
                    if(empty($soustitre)){
                        $error .= "Sous-titre est vide </br>";
                    }
                    if(empty($description)){
                        $error .= "Description est vide </br>";
                    }
                    
                    $view_file="admin_item_add";
                }
            //premier affichage ($submit empty)
            }else{
                $view_file="admin_item_add";
            }
           
            break;
           
    }
  
?>