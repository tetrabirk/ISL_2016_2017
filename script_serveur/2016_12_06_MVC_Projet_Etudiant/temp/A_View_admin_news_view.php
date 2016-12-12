<?php ?>

<div class='twelve columns'>
    <h1>Gestion des news</h1>
    <h2>Liste des news</h2>
    <?php
    if (is_array($result_list) && sizeof($result_list) > 0) {
        $tab = "";
        foreach ($result_list as $rl) {
            $titre = convertFromDB($rl["titre"]);
            $date_add = convertFromDB($rl["date_add"]);
            $categorie = convertFromDB($rl["categorie"]);
            $prenom = convertFromDB($rl["prenom"]);
            $nom = convertFromDB($rl["nom"]);

            $is_visible = convertFromDB($rl["is_visible"]);

            $ico_visible = $is_visible == "1" ? "fa-eye-slash" : "fa-eye";
            $ico_action = $is_visible == "1" ? "hidden" : "show";
            $class_visible = $is_visible == "1" ? "" : " class=\"invisible\"";

            $tab .= "
                    <tr" . $class_visible . ">
                        <td>" . $titre . "</td>
                        <td>" . $date_add . "</td>
                        <td>" . $categorie . "</td>
                        <td>" . $prenom . " " . $nom . "</td>
                        <td class='align-right'>
                            <a href='./?p=admin_news&action=update&id=" . $id . "' title=''><span class='fa fa-pencil-square-o ico_action'></span></a>
                            <a href='./?p=admin_news&action=" . $ico_action . "&id=" . $id . "' title=''><span class='fa " . $ico_visible . " ico_action'></span></a>
                        </td>
                    </tr>
                ";
        }
    }
    ?>
    <p class="align-right"><a href="?p=admin_news&action=add" title="cliquer pour ajouter une nouvelle entrée" class="button">ajouter</a></p>
    <?php
    echo!empty($msg_end) ? "<p class='msg_ok'>$msg_end</p>" : "";
    ?>
    <table class="u-full-width">
        <tr>
            <th>Titre</th>
            <th>Date ajout</th>
            <th>Catégorie</th>
            <th>Prénom - Nom</th>
            <th class="align-right">Actions</th>
        </tr>
        <?php
        echo!empty($tab) ? $tab : "<tr><td colspan=\"4\">Aucune information disponible</td></tr>";
        ?>
    </table>
</div>

