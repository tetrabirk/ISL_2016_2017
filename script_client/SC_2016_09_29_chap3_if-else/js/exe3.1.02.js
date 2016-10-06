//3.1.2 Écrire un algorithme qui détermine si un nombre entier non nul
//lu au clavier est positif ou négatif. L'algorithme affichera le message
//approprié parmi les suivants: "Le nombre est positif", "Le nombre est
//négatif".

var nbre= parseInt(prompt("nombre non nul?"));

if(nbre < 0){
    console.log("le nombre est négatif");
}else{
    console.log("le nombre est positif");
}