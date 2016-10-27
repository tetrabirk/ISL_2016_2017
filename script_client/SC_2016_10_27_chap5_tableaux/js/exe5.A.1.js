//A1. Écrire un algorithme qui affiche un tableau à une dimension d'entiers après l'avoir
//initialisé de telle manière que chaque élément soit égal à son indice.

var tab = [];
var lgtab = parseInt(prompt("longueur du tableau?"));

for (var i=0;i<lgtab;i++){
    tab[i]=i;
}
console.log(tab);