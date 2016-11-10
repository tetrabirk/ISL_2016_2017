//D8. Modifier l'algorithme de l'exercice précédent pour qu'il opère une rotation à droite
//de n positions (n entier positif). La valeur de n sera lue au clavier et supposée
//correcte.

var tab = [];
var lgtab = parseInt(prompt("longueur du tableau?"));
var decal = parseInt(prompt("decalach'??"));
var temp = [];

for (var i=0;i<lgtab;i++){
    tab[i]=parseInt(prompt("valeur?"));
}
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


