//3.1.5 Écrire un algorithme qui détermine si un nombre entier
//lu au clavier est nul, positif ou négatif. L'algorithme affichera
//le message approprié parmi les suivants: "Nombre positif",
//"Nombre négatif", "Nombre nul".

var nbre= parseInt(prompt("nombre?"));

if (nbre>0){
    console.log('nombre positif');
}else if(nbre<0){
    console.log('nombre negatif');
}else{
    console.log('nombre nul');
}