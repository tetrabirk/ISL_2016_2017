//3.1.8 Écrire un algorithme qui calcule le montant d'une facture comportant une seule ligne de facture,
//connaissant le prix unitaire de l'article et le nombre d'articles achetés. La TVA est uniformément de
//21%. Une remise sera calculée sur le montant HTVA d'après la règle suivante :
//● 100 articles et plus: 10%
//● 1000 articles et plus: 20%
//● si le montant HTVA est d'au moins 1000€ sinon 15%.
//L'algorithme affichera le nombre d'articles, le prix unitaire, le montant HTVA sans remise, la remise, le
//montant HTVA avec remise, le taux de TVA, le montant de la TVA et le montant TVAC. Exemple :
//FACTURE.
//Nombre d'articles :
//Prix unitaire :
//Montant HTVA avant remise :
//Remise :
//Montant HTVA avec remise :
//TAUX TVA (21%) :
//Montant TVA :
//Montant TVAC :

var prixU   = parseFloat(prompt('prix unitaire?'));
var nbre    = parseInt(prompt('quantité'));
var tva     = 0.21;
var remiseA = 0.1;
var remiseB = 0.15;
var remiseC = 0.2;
var htvaAR ;//HTVA avant remise
var htvaPR ;//HTVA 'post' remise
var remise ;
var mtva; //montant tva
var tvac;

htvaAR = prixU * nbre;

if(nbre>1000){
    if(htvaAR>1000){
        remise = remiseC;
    }else{
        remise = remiseB;
    }
}else if (nbre>100){
    remise = remiseA;
}else{
    remise = 0;
}

htvaPR= htvaAR-(htvaAR*remise);
mtva = (htvaPR*tva);
tvac = htvaPR + mtva;

console.log("FACTURE");
console.log("Nombre d'articles :"+nbre);
console.log("Prix unitaire :"+prixU);
console.log("Montant HTVA avant remise :"+htvaAR);
console.log("Remise :"+(remise*100)+"%");
console.log("Montant HTVA avec remise :"+htvaPR);
console.log("TAUX TVA (21%) :"+(tva*100)+"%");
console.log("Montant TVA :"+mtva);
console.log("Montant TVAC :"+tvac);