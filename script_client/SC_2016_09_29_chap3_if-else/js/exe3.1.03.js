//3.1.3 Écrire un algorithme qui détermine si un nombre entier non
//négatif lu au clavier est pair ou impair. L'algorithme affichera le
//message approprié parmi les suivants: "Le nombre est pair", "Le
//nombre est impair".

var nbre= parseInt(prompt("nombre non négatif?"));

if (nbre%2===0){
    console.log("le nombre est pair");
}else{
    console.log("le nombre est impair");
}