<?php

?>

            <div class='twelve columns'>
                <h1>Gestion de l'équipe</h1>
                <h2>Modification d'un membres de l'équipe</h2>
                <p class="align-right"><a href="?p=admin_user" title="retour à la liste" class="button">liste des entrées</a></p>
                
                <?php 
                // affichage conditionnel du msg d'erreur
                echo !empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
                // affichage du formulaire
                echo formUser($data_value, "./?p=admin_user&action=update&id=$get_item_id", "post");
                ?>
                
                
            </div>
