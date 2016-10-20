//4. Modifier l'algorithme de l'exercice 1 pour qu'il recherche le maximum, le
//minimum et le nombre de fois que chacun d'eux apparaît.

var serie= parseInt(prompt("série de combien?"));
var nbre;
var max =0;
var cmax =0; //'c' pour compteur
var min =20;
var cmin=0;

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre? (entre 0 et 20)"));
    if(nbre===max){
        cmax++;
    }
    if(nbre>max){
        max=nbre;
        cmax=1;
    }
    if(nbre===min){
        cmin++;
    }
    if(nbre<min){
        min=nbre;
        cmin=1;
    }
    
        
}
console.log("max:"+max);
console.log("occ. max:"+cmax);

console.log("min:"+min);
console.log("occ. min:"+cmin);
