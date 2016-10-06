//Faites deviner une lettre de l'alphabet :
//• L'opérateur a le droit de l'encoder en minuscule ou en majuscule
//• Si la lettre encodée suit la lettre à trouver dans l'alphabet, on affiche « trop loin »
//• Si la lettre encodée précède la lettre à trouver dans l'alphabet, on affiche « pas
//assez loin »
//• Sinon, on affiche « le caractère à trouver était bien caractere et on sort du
//programme

var lettreU; //lettre utilisateur
var lettreR = 'M'; //lettre recherchée
var codeU;
var codeR = lettreR.charCodeAt(0);
var valA = 'A'.charCodeAt(0); //65
var valZ = 'Z'.charCodeAt(0); //90
var difMajMin= ('a'.charCodeAt(0))-valA; //différence entre maj et min = 32

//demande d'un caractère à l'utilisateur et vérification qu'il s'agit bient d'une lettre de l'alphabet
while(codeU !== codeR){
    do{
        lettreU = prompt("lettre de l'alphabet?");
        codeU = lettreU.charCodeAt(0);
    }while(  codeU<valA
          ||(codeU>valZ && codeU<(valA+difMajMin))
          || codeU>(valZ+difMajMin)
          );
    //faire en sorte que les majuscule = les minuscules
    if (codeU>valZ){
        codeU -= difMajMin;
    }
    if(codeU===codeR){
        console.log("youpie, la lettre recherchée était bien "+lettreR);
    }else if(codeU>codeR){
        console.log("trop haut!");
    }else{
        console.log("trop bas!");
    }
    
}






