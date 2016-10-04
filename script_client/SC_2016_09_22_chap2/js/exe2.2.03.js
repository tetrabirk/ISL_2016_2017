//2.2.3 Écrire un script qui établit une facture comportant une seule ligne (un seul
//produit en un nombre quelconque d'exemplaires). L'utilisateur précisera le prix
//unitaire, le nombre d'exemplaires, et le taux de TVA (en %). Une remise de 10%
//est accordée systématiquement (sur le prix HTVA). Le script affichera le montant
//HTVA, le montant de la TVA et le prix TVAC.

var pu = parseInt(prompt('prix unitaire?'));
var nbex = parseInt(prompt("nombre d'exemplaire?"));
var txTVA = parseInt(prompt("taux de TVA ?(en %)"));
var remise = 10; //en pourcent

var prixsansremise = (pu*nbex);
var prixHTVA = prixsansremise -(prixsansremise*(remise/100));
var tva = prixHTVA *(txTVA/100);
var tvac = prixHTVA + tva;

console.log(nbex+" exemplaires à "+pu+" €/ex:");
console.log("prix HTVA: "+prixsansremise+"€");
console.log("remise (-"+remise+"%)");
console.log("prix HTVA: "+prixHTVA+"€");
console.log("TVA: ("+tva+"%): "+tva+"€");
console.log("total: "+(prixHTVA+tva)+"€");


