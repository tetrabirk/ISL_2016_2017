<?php

?>

            <div class='twelve columns'>
                <p class="align-right"><a href="?p=admin_item" title="retour à la liste" class="button">liste des entrées</a></p>
                
                <?php 
                // affichage conditionnel du msg d'erreur
                echo !empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
                // affichage du formulaire
                echo formItem($data_value, "./?p=admin_item&action=add", "post");
                ?>
                
                
            </div>
