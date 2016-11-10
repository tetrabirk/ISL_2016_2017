//G1. Soit t un tableau à une dimension d'entiers initialisé à sa déclaration. Écrire un
//algorithme qui transfère les entiers positifs de t dans un tableau tp, et les entiers
//négatifs dans un tableau tn. Les tableaux tp et tn seront affichés. L'algorithme
//calculera également le nombre de zéros du tableau t. Le tableau t ne sera parcouru
//qu'une seule fois. L'algorithme commencera par afficher le tableau t.

var tab=[-5,-65,-32,1,0,58,46,12,2,-8,5,-7,9,0,11,-45,-33];
var tp=[];
var tn=[];
var nul=0;

console.log(""+tab);

for (var i = 0, max = tab.length ; i < max; i++) {
    n=tab[i];
    if(n>0){
        tp.push(n);
    }else if(n<0){
        tn.push(n);
    }else{
        nul++;
    }
    
    
}
console.log("pos: "+tp);
console.log("neg: "+tn);
console.log("nul: "+nul);
