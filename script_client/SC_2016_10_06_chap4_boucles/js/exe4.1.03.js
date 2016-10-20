//3. Modifier l'algorithme de l'exercice 1 pour qu'il recherche le maximum et le
//nombre de fois que celui-ci apparaît.

var serie= parseInt(prompt("série de combien?"));
var nbre;
var max =0;
var cmax =0; //'c' pour compteur

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre? (entre 0 et 20)"));
    if(nbre===max){
        cmax++;
    }
    if(nbre>max){
        max=nbre;
        cmax=1;
    }
    
        
}
console.log("max:"+max);
console.log("occ:"+cmax);