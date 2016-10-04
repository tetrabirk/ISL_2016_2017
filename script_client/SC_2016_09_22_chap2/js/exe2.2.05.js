//2.2.5 Écrire un script qui convertit en secondes une durée donnée en heures,
//minutes et secondes

var dureeH = parseInt(prompt("heure?"));
var dureeM = parseInt(prompt("minute?"));
var dureeS = parseInt(prompt("seconde?"));

var resultS = (((dureeH*60)+dureeM)*60)+dureeS;

console.log(dureeH+" heure(s), "+dureeM+" minute(s) et "+dureeS+" seconde(s) valent "+resultS+" seconde(s).");
