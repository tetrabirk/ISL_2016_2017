
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
