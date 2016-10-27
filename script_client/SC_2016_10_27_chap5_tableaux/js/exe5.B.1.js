//B1. Écrire un algorithme qui calcule la moyenne des valeurs contenues dans un
//tableau à une dimension de nombres décimaux ainsi que le nombre de ces valeurs
//supérieures ou égales à la moyenne.

var tab = [5,8,12,3,1,31,23];
var moyenne=0;
var sup=0;
var inf=0;

for(var i=0;i<tab.length;i++){
    moyenne+=tab[i];
}
moyenne=moyenne/tab.length;

for(i=0;i<tab.length;i++){
    if (tab[i] > moyenne){
        sup++;
    }else if((tab[i] < moyenne)){
        inf++;
    }
}

console.log(tab);
console.log("moy : "+moyenne);
console.log("nbre inf : "+inf);
console.log("nbre sup : "+sup);