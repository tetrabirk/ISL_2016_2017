//3.1.10 Écrire un algorithme qui calcule le prix d'une
//consommation d'eau selon le tarif suivant :
//● les 30 premiers m³ sont gratuits
//● les volumes allant de 31 à 500 m³: 0,5€/m³
//● les volumes allant de 501 à 1000 m³ : 0,4€/m³
//● les volumes suivants : 0,25€/m³
//● avec un forfait de 15€ et une TVA de 21%.

var vol = parseFloat(prompt("volume d'eau?"));
var tarif0 = 0;
var tarif1 = 0.5;
var tarif2 = 0.4;
var tarif3 = 0.25;
var forfait= 15;
var tva = 0.21;
var prix = 0;

if(vol<=30){
    prix = vol*tarif0;
}else if(vol<=500){
    prix = (vol-30)*tarif1;
}else if(vol<1000){
    prix = (470*tarif1)+(vol-500)*tarif2;
}else{
    prix = (470*tarif1)+(500*tarif2)+(vol-1000)*tarif3;
}

prix = prix + (prix*tva);

console.log(prix);