<?php

?>

            <div class='twelve columns'>
                <h1>Gestion des projet</h1>
                <h2>Ajout d'une projet</h2>
                <p class="align-right"><a href="?p=admin_projet" title="retour à la liste" class="button">liste des entrées</a></p>
                
                <?php 
                // affichage conditionnel du msg d'erreur
                echo !empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
                // affichage du formulaire
                echo formProjet($data_value, "./?p=admin_projet&action=add", "post");
                ?>
                
                
            </div>
