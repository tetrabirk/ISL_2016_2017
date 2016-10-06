//Écrivez un algorithme qui calcule et affiche la somme des dix premières valeurs de
//la table de multiplication de l'entier positif choisi par l'utilisateur (<=100)


var nbre;
var result=0;

do{
    nbre = parseInt(prompt("nombre entre 0 et 100?"));
}while(nbre<0 || nbre>100 || Number.isInteger(nbre)===false );


for (i=1;i<=10;i++){
    result += nbre*i;
    
}

console.log(result);