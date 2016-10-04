//3.1.1 Écrire un algorithme qui détermine si un nombre entier lu au
//clavier est nul ou pas. L'algorithme affichera le message approprié
//parmi les suivants: "Le nombre est nul", "Le nombre n'est pas nul".

var nbre= parseInt(prompt("nombre?"));

if(nbre ==0){
    console.log("le nombre est nul");
}else{
    console.log("le nombre n'est pas nul");
}