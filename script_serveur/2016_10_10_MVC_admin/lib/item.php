<?php
function getItem($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "SELECT item_id, item_title, item_subtitle, item_description 
                FROM item
                WHERE item_id = $id;
                ";
    }else{
        $sql = "SELECT item_id, item_menu, item_title, item_subtitle, item_description, in_menu, is_visible 
                FROM item 
                ORDER BY order_position ASC;
                ";
    }
    return requeteResultat($sql);
}



?>