//A2. Écrire un algorithme qui affiche un tableau à une dimension d'entiers après l'avoir
//initialisé avec des valeurs lues au clavier.

var tab = [];
var lgtab = parseInt(prompt("longueur du tableau?"));

for (var i=0;i<lgtab;i++){
    tab[i]=parseInt(prompt("valeur?"));
}
console.log(tab);