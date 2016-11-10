//D7. Écrire un algorithme qui opère une rotation à droite (rotate right) de 1 position des
//éléments d'un tableau à une dimension d'entiers initialisé à sa déclaration. Le
//tableau sera affiché avant et après la rotation.

var tab = [];
var lgtab = parseInt(prompt("longueur du tableau?"));
var decal = 1;
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


