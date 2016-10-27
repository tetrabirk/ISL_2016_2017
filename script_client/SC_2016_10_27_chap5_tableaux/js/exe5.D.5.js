//D3. Écrire un algorithme qui opère un décalage à droite (shift right) de 1 position des
//éléments d'un tableau à une dimension d'entiers initialisé à sa déclaration. Le
//tableau sera affiché avant et après le décalage. Le premier élément du tableau
//conserve sa valeur (variante: prend la valeur 0).

var tab = [2, 23, 45, 65, 12, 7, 59, 18, 33];
var decal = parseInt(prompt("decalach'??"));
var temp;


console.log(tab);
for (var j = 0; j < decal; j++) {
    
    for (var i = 0, max = tab.length; i < max; i++) {
        temp = tab[max-1];
        if (i !== max - 1) {
            tab[i] = tab[i + 1];
        } else {
            tab[i] = temp;
        }
    }
}

console.log(tab);


