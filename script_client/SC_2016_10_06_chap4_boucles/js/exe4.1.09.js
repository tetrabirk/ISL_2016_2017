//8. Modifier l'algorithme de l'exercice 1 pour qu'il recherche le maximum, le nombre
//de fois qu'il apparaît et la position où il apparaît pour la première fois dans la
//série.


var serie= parseInt(prompt("série de combien?"));
var historique ="";
var nbre;
var max =0;
var cmax =0; //'c' pour compteur
var maxprem;
var maxder;
var min=20;
var cmin=0; //'c' pour compteur
var minprem;
var minder;

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre? (entre 0 et 20)"));
    if(nbre===max){
        cmax++;
        maxder=i+1;
    }    
    if(nbre>max){
        max=nbre;
        cmax=1;
        maxprem=i+1;
        maxder=maxprem;
    }
    if(nbre===min){
       cmin++;
       minder=i+1;       
    }    
    if(nbre<min){
        min=nbre;
        cmin=1;
        minprem=i+1;
        minder=minprem;
    }
    
    
    historique += nbre+', ';    
}
console.log(historique);
console.log("nombre max: "+max+", apparait "+cmax+" fois, la première fois en "+maxprem+"e position, et la dernière fois en "+maxder+"e position");
console.log("nombre min: "+min+", apparait "+cmin+" fois, la première fois en "+minprem+"e position, et la dernière fois en "+minder+"e position");