<?php
?>
    <div class='twelve columns'>
        <p class="align-right"><a href="?p=admin_user" title="retour à la liste" class="button">liste des entrées</a></p>

        <?php 
        // affichage conditionnel du msg d'erreur
        echo !empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
        // affichage conditionnel du msg d'erreur
        echo !empty($msg_end) ? "<p class='msg_ok'>$msg_end</p>" : "";
        // affichage du formulaire
        $action ="./?p=admin_user&action=update&id=".$get_id;
        echo formUser($data_value, $action , "post");
        ?>


    </div>