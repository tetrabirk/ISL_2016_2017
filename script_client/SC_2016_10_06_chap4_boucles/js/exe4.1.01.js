//1. Écrire un algorithme qui recherche le maximum d'une série de nombres entiers
//lus au clavier et compris entre 0 et 20. L'effectif de la série sera introduit avant
//les nombres de la série et sera supposé strictement positif. L'algorithme
//n'effectuera aucun contrôle de validité.

var serie= parseInt(prompt("série de combien?"));
var nbre;
var max =0;

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre? (entre 0 et 20)"));
    if(nbre>max){
        max=nbre;
    }
        
}
console.log("max:"+max);