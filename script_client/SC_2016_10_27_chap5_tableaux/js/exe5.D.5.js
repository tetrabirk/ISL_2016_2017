//D5. Écrire un algorithme qui opère une rotation à gauche (rotate left) de 1 position des
//éléments d'un tableau à une dimension d'entiers initialisé à sa déclaration. Le
//tableau sera affiché avant et après la rotation.

var tab=[1,2,3,4,5,6];
var decal = 1;
var temp = [];


console.log(tab);
//rotation a gauche

for (var i = 0, max = tab.length ; i < max; i++) {
    if (i<(max-decal)){
        temp[i]=tab[i+decal];
    }else{
        temp[i]=tab[i-(max-decal)];
    }
    
}
tab = temp;
console.log(tab);



