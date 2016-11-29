<?php
    if(isset($error)){
        echo $error;
    }
?>

<table>
    <tr>
        <th colspan="2">Vos données utilisateur</th>
    </tr>
    <tr>
        <td>Login</td>
        <td><?= $get_user[0]['login']?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>******* <a href="./?p=admin_membre&action=mdp">Modifier</a></td>
    </tr>
    <tr>
        <td>Nom</td>
        <td><?= $get_user[0]['nom']?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?= $get_user[0]['prenom']?></td>
    </tr>
    <tr>
        <td>Parcours</td>
        <td><?= $get_user[0]['parcours']?></td>
    </tr>
    <tr>
        <td>Diplôme</td>
        <td><?= $get_user[0]['diplome']?></td>
    </tr>
</table>