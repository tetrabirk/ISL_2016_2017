//6. Modifier l'algorithme de l'exercice 1 pour qu'il recherche le maximum et la
//position où il apparaît pour la première fois dans la série

var serie= parseInt(prompt("série de combien?"));
var nbre;
var max =0;
var pos;//=>posistion

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre? (entre 0 et 20)"));
    if(nbre>max){
        pos=i+1;
        max=nbre;
    }
        
}
console.log("max:"+max);
console.log("position:"+pos);
