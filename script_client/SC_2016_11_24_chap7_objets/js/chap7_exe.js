//Les objets
//
//1 Élèves
//Vous devez créer un objet-type pour gérer les élèves d'une classe
//En plus des propriétés courantes d'un élève, vous devez ajouter les propriétés permettant
//de stocker les cours suivis ainsi que les points obtenus dans ceux-ci.
//Vous devez également créer les méthodes permettant de manipuler toutes ces propriétés
//avec notamment :
//• ajout d'un cours
//• ajout de points pour les cours
//• calcul de la moyenne pour un cours
//• calcul de la moyenne totale
//Créez un programme de test pour vérifier le bon fonctionnement de votre objet-type.
//
//2 Cours
//Idem exercice 1, avec la création d'un objet-type pour un cours que vous utiliserez dans
//l'objet-type Élève.
//
//3 Filière et classe
//Une filière porte un nom, un code et est composée de cours.
//Il est possible d'extraire, d'afficher (pour le conseil des études par exemple) le nombre de
//réussites, d'ajournements et de refus par cours.
//Les différents seuils (en %) peuvent être configurés et sont identiques pour tous les cours.
//Il faut également ajouter à l'objet « cours » la valeur maximale des notes.
//Il faut réorganiser les objets cours et élèves afin de rendre le concept pertinent.
//L'ensemble des élèves sera contenu dans un objet « classe » qui portera un nom ainsi
//qu'un code.
//
//
//
//   FILIÈRE                             CLASSE
//      |                                  |
//     1,N                                1,N
//      |                                  |
//   contient                            compte
//      |                                  |
//     1,1                                1,N
//      |                                  |
//    COURS-----0,N-----suit-----1,N-----ELÈVE