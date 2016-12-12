<div class='twelve columns'>
    <h1>Gestion des news</h1>
    <h2>Ajout d'une news</h2>
    <p class="align-right"><a href="?p=admin_news" title="retour à la liste" class="button">liste des entrées</a></p>

    <?php
    // affichage conditionnel du msg d'erreur
    echo!empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
    // affichage du formulaire
    echo formNews($data, $method, $action);
    ?>

</div>
