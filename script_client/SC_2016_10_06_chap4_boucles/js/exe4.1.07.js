//7. Modifier l'algorithme de l'exercice 1 pour qu'il recherche le maximum, le nombre
//de fois qu'il apparaît et la position où il apparaît pour la dernière fois dans la
//série.

var serie= parseInt(prompt("série de combien?"));
var nbre;
var max =0;
var cmax =0; //'c' pour compteur
var pos;//=>posistion

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre? (entre 0 et 20)"));
    if(nbre===max){
        pos=i+1;
        cmax++;
    }
    
    if(nbre>max){
        max=nbre;
        cmax=1;
        
    }
    
    
        
}
console.log("max:"+max);
console.log("position:"+pos);