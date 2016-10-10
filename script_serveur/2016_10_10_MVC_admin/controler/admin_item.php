<?php
    include_once 'lib/item.php';
     
    $get_action= isset($_GET["action"]) ? $_GET["action"] : "view";
    
    switch($get_action){
        case "view":
            $result_menu = getItem(0);
            $view_file="admin_item_view";
            break;
        case "update":
            $view_file="admin_item_update";
            break;
        case "add":
            $result_menu = getItem(0);
            $view_file="admin_item_add";
            break;
           
    }
       
?>