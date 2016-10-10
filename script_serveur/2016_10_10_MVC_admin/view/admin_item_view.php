<a href="?p=admin_item&action=add">Ajouter</a>

<?php
    if(isset($result_menu) && is_array($result_menu) && sizeof($result_menu) > 0){
        $table_admin = "";
        $table_admin .= "<table>";
        $table_admin .= "   <tr>";
        $table_admin .= "       <th>Menu</th>";
        $table_admin .= "       <th>Titre</th>";
        $table_admin .= "       <th>Sous-titre</th>";
        $table_admin .= "       <th>Actions</th>";
        $table_admin .= "   </tr>";
        
        foreach($result_menu as $rs){
            $item_id            = $rs["item_id"];
            $item_menu    = $rs["item_menu"];
            $title        = $rs["item_title"];
            $subtitle     = $rs["item_subtitle"];
            $m_in_menu          = $rs["in_menu"];
            $m_is_visible       = $rs["is_visible"];
            
            $table_admin .="<tr>";
            $table_admin .="    <td>".$item_menu."</td>";
            $table_admin .="    <td>".$title."</td>";
            $table_admin .="    <td>".$subtitle."</td>";
            $table_admin .="    <td><a href='?p=admin_item&action=update&id=".$item_id."'>modif</a> ";
            $table_admin .="    <a href='?p=admin_item&action=visible&id=".$item_id."'>masquer</a></td>";
        }
        $table_admin .= "</table>";
    }
    echo $table_admin;
?>