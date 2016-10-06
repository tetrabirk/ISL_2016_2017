//Écrivez un algorithme qui calcule et affiche les sommes des multiples de 3, de 5, de 7 et de 11 compris entre une valeur minimale et une valeur maximale saisies par
//l'utilisateur (Ex :entre 50 et 90)

var result=0;
var valeurMin;
var valeurMax;

do{
    valeurMin = parseInt(prompt("valeur min >0"));
}while(valeurMin<0 || Number.isInteger(valeurMin)===false );
do{
    valeurMax = parseInt(prompt("valeur min >0"));
}while(valeurMax<0 ||valeurMax<valeurMin || Number.isInteger(valeurMax)===false );

for(i=valeurMin;i<valeurMax;i++){
   if (i%3===0 || i%5===0 || i%7===0 || i%11===0){
      result += i;
   }
}
console.log(result);


