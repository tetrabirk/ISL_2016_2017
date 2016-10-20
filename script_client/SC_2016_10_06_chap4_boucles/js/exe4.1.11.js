//Modifier l'algorithme précédent pour qu'il recherche à la fois le maximum et le minimum de la série.


var serie= parseInt(prompt("série de combien?"));
var nbre;
var max ;
var min;
var historique ="";

max= parseInt(prompt("nombre entier ?"));
min= max;
historique += max+', ';
for (i=0;i<(serie-1);i++){
    nbre= parseInt(prompt("nombre entier ?"));
    
    if(nbre>max){
        max=nbre;
    }
    if(nbre<min){
        min=nbre;
    }
    
    
    historique += nbre+', ';    
}
console.log(historique);
console.log("max:"+max);
console.log("min:"+min);
