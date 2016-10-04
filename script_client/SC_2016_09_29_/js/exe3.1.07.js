//3.1.7 Écrire un algorithme qui crypte un caractère lu au clavier d'après
//la règle suivante :
//● Chaque lettre est remplacée par sa suivante dans l'alphabet
//● Z sera remplace‚ par A, z par a (une majuscule reste majuscule, une
//minuscule reste minuscule)
//● Chaque chiffre est remplacé par son suivant (9 sera remplacé par 0)
//● Tout autre caractère sera remplacé par le caractère *
//● L'algorithme affichera le caractère crypté
//
//● Obtenir la valeur Unicode d'un caractère :
//var str = 'pomme';
//var code = str.charCodeAt(0); // premier caractère de la variable str
//● Obtenir un caractère à partir d'une valeur Unicode :
//var caractere = String.fromCharCode(code+1); // retourne 'q'
//
//--------------------------------------------------------------------

var carU = prompt('donne un caractere'); //caractere Utilisateur
var code = carU.charCodeAt(0); //code du caractere
var carS ; //caractere de sortie

if((code>='0'.charCodeAt(0) && code<'9'.charCodeAt(0))||
   (code>='a'.charCodeAt(0) && code<'z'.charCodeAt(0))||
   (code>='A'.charCodeAt(0) && code<'Z'.charCodeAt(0))){
    code += 1;
}else if(code==='9'.charCodeAt(0)){
    code = '0'.charCodeAt(0);
}else if(code==='z'.charCodeAt(0)){
    code = 'a'.charCodeAt(0);
}else if(code==='Z'.charCodeAt(0)){
    code = 'A'.charCodeAt(0);
}else{
    console.log("ceci n'est pas un carractère acceptable: ");
}
var carS = String.fromCharCode(code);

console.log(carS);
