//10.Écrire un algorithme qui recherche le maximum d'une série de nombres entiers
//(positifs et négatifs) lus au clavier. L'effectif de la série sera introduit avant les
//nombres de la série et sera supposé strictement positif (pas de contrôle de
//validité).

var serie= parseInt(prompt("série de combien?"));
var nbre;
var max ;
var historique ="";

max= parseInt(prompt("nombre entier ?"));
historique += max+', ';
for (i=0;i<(serie-1);i++){
    nbre= parseInt(prompt("nombre entier ?"));
    
    if(nbre>max){
        max=nbre;
    }
    
    
    historique += nbre+', ';    
}
console.log(historique);
console.log("max:"+max);
