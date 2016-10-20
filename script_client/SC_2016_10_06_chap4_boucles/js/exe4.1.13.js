//Écrire un algorithme qui calcule le nombre de valeurs positives, le nombre de
//valeurs négatives et le nombre de valeurs nulles d'une série de valeurs entières
//entrées au clavier. L'effectif de la série sera introduit avant les nombres de la
//série et sera supposé strictement positif (pas de contrôle de validité).


var serie= parseInt(prompt("série de combien?"));
var nbre;
var somme=0;
var moyenne;
var u_decimale = parsInt(prompt("nbre de décimale?"));
var decimale = 1;
var historique ="";

for(i=0;i<u_decimale;i++){
    decimale *=10;
}


for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre entier ?")); 
    somme +=nbre;
    
    historique += nbre+', ';    
}
moyenne=somme/serie;
//moyenne= moyenne+++++++++++++++++++++++++++++++++++++++++++++++
console.log(historique);
