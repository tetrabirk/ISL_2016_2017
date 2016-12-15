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


var eleve = {
    nom : 'Boberson',
    prenom : 'Bob'
};


for(var cle in eleve){
    console.log(cle+' : '+eleve[cle]);
}