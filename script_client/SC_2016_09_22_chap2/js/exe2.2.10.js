//2.2.10 Écrire un script qui réalise la permutation circulaire à droite de 3
//variables numériques. Les valeurs des variables sont affichées avant et après
//permutation

var nbre1 = parseInt(prompt("nbre1"));
var nbre2 = parseInt(prompt("nbre2"));
var nbre3 = parseInt(prompt("nbre2"));
var temp ;

console.log("avant, nbre1= "+nbre1+", nbre2= "+nbre2+" et nbre3= "+nbre3);

temp = nbre1;
nbre1= nbre3;
nbre3= nbre2;
nbre2= temp;

console.log("après, nbre1= "+nbre1+", nbre2= "+nbre2+" et nbre3= "+nbre3);