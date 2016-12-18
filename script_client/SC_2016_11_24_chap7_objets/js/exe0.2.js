//Énoncé 2 : créez une fonction qui mettra en
//majuscule la première lettre d'une chaîne de
//caractères


function majuscule(string){
    var chaine =(string.trim()).toLowerCase();
    var premierelettre = (chaine.substr(0,1)).toUpperCase();
    var result =  premierelettre+chaine.substring(1);
    
    return result;
}

(((string.trim()).substr(0.1)).toUpperCase())+(((string.trim()).substring(1)).toLowerCase());


var string= prompt("string?");

console.log(majuscule(string));