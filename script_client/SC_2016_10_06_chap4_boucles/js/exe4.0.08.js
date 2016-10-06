//Écrivez un algorithme qui affiche les dix premières puissances (à partir de 0) de
//l'entier positif choisi par l'utilisateur (<=100)

var nbre;
var result=1;
do{
    nbre = parseInt(prompt("nbre=<100"));
}while(nbre>100 || Number.isInteger(nbre)===false );

for(i=0;i<10;i++){
    console.log(result);
    result *= nbre;
}