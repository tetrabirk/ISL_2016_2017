//D3. Écrire un algorithme qui opère un décalage à droite (shift right) de 1 position des
//éléments d'un tableau à une dimension d'entiers initialisé à sa déclaration. Le
//tableau sera affiché avant et après le décalage. Le premier élément du tableau
//conserve sa valeur (variante: prend la valeur 0).

var tab=[2,23,45,65,12,7,59,18,33];

var decal= 1;

console.log(tab);

for (var i = 0, max = tab.length ; i < max; i++) {
    j=max-(i+1);
    if (j > decal-1){
        tab[j]=tab[j-decal];
    }else{
        tab[j]=0;
    }
}

console.log(tab);
