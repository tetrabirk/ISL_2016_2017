<?php

?>

            <div class='twelve columns'>
                <h1>Gestion des pages</h1>
                <h2>Modification de la page</h2>
                <p class="align-right"><a href="?p=admin_item" title="retour à la liste" class="button">liste des entrées</a></p>
                
                <?php 
                // affichage conditionnel du msg d'erreur
                echo !empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
                // affichage du formulaire
                echo formItem($data_value, "./?p=admin_item&action=update&id=$get_item_id", "post");
                ?>
                
                
            </div>
