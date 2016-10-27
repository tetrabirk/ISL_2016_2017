//C1. Soit t un tableau à une dimension d'entiers initialisé à sa déclaration. Écrire un algorithme qui affiche successivement et sur des lignes différentes, le premier
//élément du tableau, puis les deux premiers, puis les trois premiers et ainsi de suite
//jusqu'à la totalité du tableau. L'algorithme affichera le tableau avant les résultats.

var tab=[2,23,45,65,12,7,59,18,33];

var affichage="";

for (var i = 0, max = tab.length; i < max; i++) {
    for (var j = 0; j < i; j++) {
        affichage += tab[j]+" ";
    }
    affichage += "\n";
}

console.log(tab);
console.log(affichage);