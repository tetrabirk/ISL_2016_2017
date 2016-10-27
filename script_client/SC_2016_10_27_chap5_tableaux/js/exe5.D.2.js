//D2. Modifier l'algorithme de l'exercice précédent pour qu'il opère un décalage à gauche
//de n positions (n étant un entier positif). La valeur de n sera lue au clavier et
//supposée correcte.

var tab=[2,23,45,65,12,7,59,18,33];

var decal=parseInt(prompt("decalach'??"));

console.log(tab);

for (var i = 0, max = tab.length ; i < max; i++) {
    if (i < max-decal){
        tab[i]=tab[i+decal];
    }else{
        tab[i]=0;
    }
}

console.log(tab);
