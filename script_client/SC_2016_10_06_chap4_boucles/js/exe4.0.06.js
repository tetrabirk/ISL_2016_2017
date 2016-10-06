//Écrivez un algorithme qui calcule et affiche la somme des nombres pairs et la
//somme des nombres impairs compris entre une valeur minimale et une valeur
//maximale saisies par l'utilisateur (Ex :entre 50 et 90)

var resultPair=0;
var resultImpair=0;
var valeurMin;
var valeurMax;

do{
    valeurMin = parseInt(prompt("valeur min >0"));
}while(valeurMin<0 || Number.isInteger(valeurMin)===false );
do{
    valeurMax = parseInt(prompt("valeur min >0"));
}while(valeurMax<0 ||valeurMax<valeurMin || Number.isInteger(valeurMax)===false );

for(i=valeurMin;i<valeurMax;i++){
   if (i%2===0){
       resultPair += i;
   }else{
       resultImpair +=i;
   }
}

console.log("somme des nombre pair entre "+valeurMin+" et "+valeurMax+" = "+resultPair);
console.log("somme des nombre impair entre "+valeurMin+" et "+valeurMax+" = "+resultImpair);