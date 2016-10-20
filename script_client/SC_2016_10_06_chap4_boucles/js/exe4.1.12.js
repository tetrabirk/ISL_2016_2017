//Écrire un algorithme qui calcule le nombre de valeurs positives, le nombre de
//valeurs négatives et le nombre de valeurs nulles d'une série de valeurs entières
//entrées au clavier. L'effectif de la série sera introduit avant les nombres de la
//série et sera supposé strictement positif (pas de contrôle de validité).


var serie= parseInt(prompt("série de combien?"));
var nbre;
var cpt_pos=0;
var cpt_neg=0;
var cpt_nul=0;
var historique ="";

for (i=0;i<serie;i++){
    nbre= parseInt(prompt("nombre entier ?"));
    
    if(nbre>0){
        cpt_pos++;
    }else if(nbre<0){
        cpt_neg++;
    }else{
        cpt_nul++;
    }
    
    
    
    
    historique += nbre+', ';    
}
console.log(historique);
console.log("positif:" + cpt_pos);
console.log("negatif:" + cpt_neg);
console.log("nul:" + cpt_nul);
