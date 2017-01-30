<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Vous devez implémenter la partie gestion du côté client d'une application de blog.
Il faut dans ce cadre créer les scripts qui implémentent les objets utilisateur, article et
commentaire.</p>
        <p>Un utilisateur comportera les propriétés suivantes :</p>
        <ul>
            <li>nom</li>
            <li>prénom</li>
            <li>email</li>
            <li>login</li>
            <li>mot de passe</li>
        </ul>
        <p>Un article comportera les propriétés suivantes :</p>
        <ul>
            Un article comportera les propriétés suivantes :
            <li>titre</li>
            <li>contenu</li>
            <li>date de création</li>
            <li>date de mise à jour</li>
            <li>catégories</li>
            <li>mots-clés</li>
            <li>rédacteur</li>
            <li>commentaires</li>
            <li>votes positifs</li>
            <li>votes négatifs</li>
            <li>visible</li>
        </ul>
        <p>Un commentaire comportera les propriétés suivantes :</p>
        <ul>
            <li>contenu</li>
            <li>date de création</li>
            <li>date de mise à jour</li>
            <li>rédacteur</li>
            <li>votes positifs</li>
            <li>votes négatifs</li>
        </ul>
        <p>Vous devez, pour chacun de ces objets, créer les méthodes qui vous semblent
pertinentes.
Vous pourrez fournir, par exemple :</p>
        <ul>
            <li>le nombre d'utilisateurs inscrits sur le blog</li>
            <li>le nombre d'articles</li>
            <li>l'article le plus apprécié</li>
            <li>l'article le plus commenté</li>
            <li>la note moyenne des articles d'un rédacteur</li>
        </ul>
        <p>Afin de valider ces scripts, vous créerez un ensemble de tests dans un fichier séparé.
Vous délivrerez donc au moins cinq fichiers :</p>
        <ol>
            <li>utilisateur</li>
            <li>blog</li>
            <li>article</li>
            <li>commentaire</li>
            <li>test</li>
        </ol>
        
        <script src="js/exe_reca_blog.js" type="text/javascript"></script>
        <script src="js/exe_reca_utilisateur.js" type="text/javascript"></script>
        <script src="js/exe_reca_article.js" type="text/javascript"></script>
        <script src="js/exe_reca_commentaire.js" type="text/javascript"></script>
        <script src="js/exe_reca_test.js" type="text/javascript"></script>
    </body>   
</html>
