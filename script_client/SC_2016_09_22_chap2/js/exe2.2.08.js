//2.2.8 Écrire un script qui réalise la permutation de deux variables numériques.
//Les valeurs des variables sont affichées avant et après permutation

var nbre1 = parseInt(prompt("nbre1"));
var nbre2 = parseInt(prompt("nbre2"));
var temp ;

console.log("avant, nbre1= "+nbre1+" et nbre2= "+nbre2);

temp = nbre1;
nbre1= nbre2;
nbre2= temp;

console.log("après, nbre1= "+nbre1+" 6et nbre2= "+nbre2);