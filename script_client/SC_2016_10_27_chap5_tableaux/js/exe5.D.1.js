//D1. Écrire un algorithme qui opère un décalage à gauche (shift left) de 1 position des
//éléments d'un tableau à une dimension d'entiers initialisé à sa déclaration. Le
//tableau sera affiché avant et après le décalage. Le dernier élément du tableau
//conserve sa valeur (variante: prend la valeur 0).
//
//SOLUTION 1

var tab=[2,23,45,65,12,7,59,18,33];

console.log(tab);

for (var i = 0, max = tab.length ; i < max; i++) {
    if (i!==max-1){
        tab[i]=tab[i+1];
    }else{
        tab[i]=0;
    }
}

console.log(tab);

//SOLUTION 2
//
//var tab=[2,23,45,65,12,7,59,18,33];
//
//console.log(tab);
//
//tab.shift();
//tab.push(0);
//
//console.log(tab);
