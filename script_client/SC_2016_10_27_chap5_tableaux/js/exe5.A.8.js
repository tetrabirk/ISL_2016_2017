//A8. Écrire un algorithme qui calcule, dans un tableau à une dimension d'entiers
//initialisé à sa déclaration, la somme des éléments du tableau. L'algorithme affichera
//le tableau avant les résultats.

var tab = [];
var lgtab = parseInt(prompt("longueur du tableau?"));

var somme=0;

for (var i=0;i<lgtab;i++){
    tab[i]=parseInt(prompt("valeur?"));
    somme +=tab[i];
}
console.log(tab);
console.log("somme = "+somme);