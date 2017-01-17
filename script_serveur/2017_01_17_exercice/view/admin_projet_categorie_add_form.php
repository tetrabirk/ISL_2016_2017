<?php

?>

            <div class='twelve columns'>
                <h1>Gestion des catégories de projet</h1>
                <h2>Ajout d'une catégorie</h2>
                <p class="align-right"><a href="?p=admin_news" title="retour à la liste" class="button">liste des entrées</a></p>
                
                <?php 
                // affichage conditionnel du msg d'erreur
                echo !empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
                // affichage du formulaire
                echo formProjetCategorie($data_value, "./?p=admin_projet_categorie&action=add", "post");
                ?>
                
                
            </div>
