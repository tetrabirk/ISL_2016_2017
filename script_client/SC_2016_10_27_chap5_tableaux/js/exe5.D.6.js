//D6. Modifier l'algorithme de l'exercice précédent pour qu'il opère une rotation à gauche
//de n positions (n entier positif). La valeur de n sera lue au clavier et supposée
//correcte.


var tab=[1,2,3,4,5,6];
var decal = parseInt(prompt("decalach'??"));
var temp = [];

//rotation a gauche
console.log(tab);
for (var i = 0, max = tab.length ; i < max; i++) {
    if (i<(max-decal)){
        temp[i]=tab[i+decal];
    }else{
        temp[i]=tab[i-(max-decal)];
    }
    
}
tab = temp;
console.log(tab);


