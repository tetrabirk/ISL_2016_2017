//3.1.4 Écrire un algorithme qui détermine si un nombre entier lu au
//clavier est égal à 30, 40 ou 50. L'algorithme affichera le message
//approprié parmi les suivants: "Valeur correcte", "Valeur incorrecte".

var nbre= parseInt(prompt("écris, 30, 40 ou 50!"));

if (nbre===30||nbre===40||nbre===50){
    console.log("valeur correcte");
}else{
    console.log("valeur incorrecte");
}