<!--LEYENS Ludovic 24-01/2017-->
<?php

?>

            <div class='twelve columns'>
                <h1>Gestion des services</h1>
                <h2>Liste des services proposés</h2>
                <?php 
                if(is_array($result_list) && sizeof($result_list) > 0){
                    $tab = "";
                    foreach($result_list as $rl){
                        $id             = convertFromDB($rl["service_id"]);
                        $title          = convertFromDB($rl["service"]);
                        $subtitle       = convertFromDB($rl["explication"]);
                        $description    = convertFromDB($rl["description"]);
                        $is_visible     = convertFromDB($rl["is_visible"]);
                        
                        $ico_visible    = $is_visible == "1" ? "fa-eye-slash" : "fa-eye";
                        $ico_action     = $is_visible == "1" ? "hidden" : "show";
                        
                        $class_visible  = $is_visible == "1" ? "" : " class=\"invisible\"";
                        
                        $tab .= "
                                <tr".$class_visible.">
                                    <td>".$title."</td>
                                    <td>".$subtitle."</td>
                                    <td class='align-right'>
                                        <a href='?p=admin_service&action=update&id=".$id."'><span class='fa fa-pencil-square-o ico_action'></span></a>
                                    </td>
                                </tr>
                            ";
                    }
                }
                
                ?>
                <p class="align-right"><a href="?p=admin_service&action=add" title="cliquer pour ajouter une nouvelle entrée" class="button">ajouter</a></p>
                <?php
                echo !empty($msg_end) ? "<p class='msg_ok'>$msg_end</p>" : "";
                ?>
                <table class="u-full-width">
                    <tr>
                        <th>Service</th>
                        <th>Explication</th>
                        <th class="align-right">Actions</th>
                    </tr>
                    <?php
                    echo !empty($tab) ? $tab : "<tr><td colspan=\"4\">Aucune information disponible</td></tr>";
                    ?>
                </table>
                
            </div>
