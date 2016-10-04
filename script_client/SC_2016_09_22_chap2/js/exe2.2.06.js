//2.2.6 Écrire un script qui convertit en heures, minutes et secondes une durée
//donnée en secondes

var dureeS = parseInt(prompt("seconde?"));
var reste ;
var resultS;
var resultM;
var resultH;

resultS = dureeS%60;
reste   = dureeS-resultS;
resultM = (reste/60)%60;
reste   = dureeS-resultS-(resultM*60);
resultH = reste/3600;



console.log(dureeS+" seconde(s) valent "+resultH+" heure(s), "+resultM+" minute(s) et "+resultS+" seconde(s).");
