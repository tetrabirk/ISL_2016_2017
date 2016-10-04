<?php

function getItem($id){
    if (!is_numeric($id)){
        return false;
        
    }
    $sql= "SELECT item_title,item_subtitle,item_description
            FROM item
            WHERE item_id=$id;";

    return requeteResultat($sql);
}

?>
