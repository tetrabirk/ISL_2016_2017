<?php

?>

            <div class='twelve columns'>
                <h1>Gestion des pages</h1>
                <h2>Liste des pages</h2>
                <?php 
                if(is_array($result_list) && sizeof($result_list) > 0){
                    $tab = "";
                    foreach($result_list as $rl){
                        $id             = convertFromDB($rl["item_id"]);
                        $menu           = convertFromDB($rl["item_menu"]);
                        $title          = convertFromDB($rl["item_title"]);
                        $subtitle       = convertFromDB($rl["item_subtitle"]);
                        $description    = convertFromDB($rl["item_description"]);
                        $in_menu        = convertFromDB($rl["in_menu"]);
                        $is_visible     = convertFromDB($rl["is_visible"]);
                        
                        $ico_visible    = $is_visible == "1" ? "fa-eye-slash" : "fa-eye";
                        $ico_action     = $is_visible == "1" ? "hidden" : "show";
                        
                        $class_visible  = $is_visible == "1" ? "" : " class=\"invisible\"";
                        
                        $tab .= "
                                <tr".$class_visible.">
                                    <td>".$menu."</td>
                                    <td>".$title."</td>
                                    <td>".$subtitle."</td>
                                    <td class='align-right'>
                                        <a href='./?p=admin_item&action=update&id=".$id."' title=''><span class='fa fa-pencil-square-o ico_action'></span></a>
                                        <a href='./?p=admin_item&action=".$ico_action."&id=".$id."' title=''><span class='fa ".$ico_visible." ico_action'></span></a>
                                    </td>
                                </tr>
                            ";
                    }
                }
                
                ?>
                <p class="align-right"><a href="?p=admin_item&action=add" title="cliquer pour ajouter une nouvelle entrée" class="button">ajouter</a></p>
                <?php
                echo !empty($msg_end) ? "<p class='msg_ok'>$msg_end</p>" : "";
                ?>
                <table class="u-full-width">
                    <tr>
                        <th>Menu</th>
                        <th>Titre</th>
                        <th>Sous-titre</th>
                        <th class="align-right">Actions</th>
                    </tr>
                    <?php
                    echo !empty($tab) ? $tab : "<tr><td colspan=\"4\">Aucune information disponible</td></tr>";
                    ?>
                </table>
                
            </div>
