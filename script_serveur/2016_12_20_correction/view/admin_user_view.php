<?php

?>

            <div class='twelve columns'>
                <h1>Gestion de l'équipe</h1>
                <h2>Liste des membres de l'équipe</h2>
                <?php 
                if(is_array($result_list) && sizeof($result_list) > 0){
                    $tab = "";
                    foreach($result_list as $rl){
                        $id         = convertFromDB($rl["admin_id"]);
                        $nom        = convertFromDB($rl["nom"]);
                        $prenom     = convertFromDB($rl["prenom"]);
                        $login      = convertFromDB($rl["login"]);
                        $level      = convertFromDB($rl["level"]);
                        $is_visible = convertFromDB($rl["is_visible"]);
                        
                        $level      = $level == "1" ? "super administrateur" : "utilisateur";
                        
                        $ico_visible    = $is_visible == "1" ? "fa-eye-slash" : "fa-eye";
                        $ico_action     = $is_visible == "1" ? "hidden" : "show";
                        
                        $class_visible  = $is_visible == "1" ? "" : " class=\"invisible\"";
                        
                        $tab .= "
                                <tr".$class_visible.">
                                    <td>".$nom." ".$prenom."</td>
                                    <td>".$login."</td>
                                    <td>".$level."</td>
                                    <td class='align-right'>
                                        <a href='./?p=admin_user&action=update&id=".$id."' title=''><span class='fa fa-pencil-square-o ico_action'></span></a>
                                        <a href='./?p=admin_user&action=".$ico_action."&id=".$id."' title=''><span class='fa ".$ico_visible." ico_action'></span></a>
                                    </td>
                                </tr>
                            ";
                    }
                }
                
                ?>
                <p class="align-right"><a href="?p=admin_user&action=add" title="cliquer pour ajouter une nouvelle entrée" class="button">ajouter</a></p>
                <?php
                echo !empty($msg_end) ? "<p class='msg_ok'>$msg_end</p>" : "";
                ?>
                <table class="u-full-width">
                    <tr>
                        <th>Nom - prénom</th>
                        <th>Login (e-mail)</th>
                        <th>Niveau d'accès</th>
                        <th class="align-right">Actions</th>
                    </tr>
                    <?php
                    echo !empty($tab) ? $tab : "<tr><td colspan=\"4\">Aucune information disponible</td></tr>";
                    ?>
                </table>
                
            </div>
