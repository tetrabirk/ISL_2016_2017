//2.2.9 Écrire un script qui réalise la permutation circulaire à gauche de 3
//variables numériques. Les valeurs des données sont affichées avant et après
//permutation. Permutation circulaire à gauche des variables A, B, C = A ¬ B ¬ C
//¬ A

var nbre1 = parseInt(prompt("nbre1"));
var nbre2 = parseInt(prompt("nbre2"));
var nbre3 = parseInt(prompt("nbre2"));
var temp ;

console.log("avant, nbre1= "+nbre1+", nbre2= "+nbre2+" et nbre3= "+nbre3);

temp = nbre1;
nbre1= nbre2;
nbre2= nbre3;
nbre3= temp;

console.log("après, nbre1= "+nbre1+", nbre2= "+nbre2+" et nbre3= "+nbre3);