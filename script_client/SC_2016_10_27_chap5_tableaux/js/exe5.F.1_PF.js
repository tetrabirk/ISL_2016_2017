//F1. (recherche dichotomique) Comme le E1 mais les éléments du tableau sont triés
//en ordre croissant.

var tab=[1,12,23,34,45,56,67,78,89,93];
var n;
var d1;
var dt;//division temp
for (var i = 0, max = tab.length ; Math.pow(2,i-1) < max; i++) {
    n=tab[i];
    if(i===0){
        d1=max;
    }else{
        d1=dt;
    }
    if(n<floor(tab[d1/2])){
        
    }
}

//JE SAIS PAS PR LE MOMENT