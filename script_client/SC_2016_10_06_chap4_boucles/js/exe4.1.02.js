//2. Modifier l'algorithme de l'exercice 1 pour qu'il recherche à la fois le maximum et
//le minimum de la série.

var serie= parseInt(prompt("série de combien?"));
var nbre;
var max =0;
var min =20;

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre? (entre 0 et 20)"));
    if(nbre>max){
        max=nbre;
    }
    if(nbre<min){
        min=nbre;
    }
    
        
}
console.log("max:"+max);
console.log("min:"+min);