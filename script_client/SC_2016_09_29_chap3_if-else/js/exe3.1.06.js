//3.1.6 Écrire un algorithme qui recherche et affiche le
//maximum parmi 5 nombres entiers lus au clavier. La
//recherche du maximum se fera au fur et à mesure des
//entrées successives. Il n'est donc pas question d'utiliser 5
//données différentes pour mémoriser les valeurs des 5
//nombres, l'algorithme n'utilisera pour ce faire qu'une seule
//variable.

//je dois poser la question 5x
var nbre    = parseInt(prompt("nombre?"));//1
var nbremax = parseInt(prompt("nombre?"));//2

nbremax = ((nbre > nbremax) ? nbre : nbremax);

nbre    = parseInt(prompt("nombre?"));//3
nbremax = ((nbre > nbremax) ? nbre : nbremax);

nbre    = parseInt(prompt("nombre?"));//4
nbremax = ((nbre > nbremax) ? nbre : nbremax);

nbre    = parseInt(prompt("nombre?"));//5
nbremax = ((nbre > nbremax) ? nbre : nbremax);

console.log("le plus grand nombre c'est "+nbremax);



