//D4. Modifier l'algorithme de l'exercice précédent pour qu'il opère un décalage à droite
//de n positions (n étant un entier positif). La valeur de n sera lue au clavier et
//supposée correcte.


var tab=[1,2,3,4,5,6];
var decal= 1;
var temp = [];


console.log(tab);

//rotation a droite
for (var i = 0, max = tab.length ; i < max; i++) {
    if (i<decal){
        temp[i]=tab[i+(max-decal)];
    }else{
        temp[i]=tab[i-decal];
    }
    
}
tab = temp;
console.log(tab);