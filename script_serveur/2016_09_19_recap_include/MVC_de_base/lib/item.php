<?php

function getItem($id){
    if (!is_numeric($id)){
        return false;
        
    }
    if ($id>0){
    $sql= "SELECT item_title, item_subtitle, item_description
            FROM item
            WHERE item_id=$id;";
    }else{
    $sql= "SELECT item_id, item_menu, order_position
            FROM item
            WHERE in_menu='1'
            ORDER BY order_position;";
               
    }
    return requeteResultat($sql);
}

?>
