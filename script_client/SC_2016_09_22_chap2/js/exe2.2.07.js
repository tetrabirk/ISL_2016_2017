//2.2.7 Écrire un script qui calcule le temps écoulé entre deux instants donnés
//d'une même journée (les deux instants sont donnés en heures, minutes et
//secondes)

var dureeH1 = parseInt(prompt("heure?"));
var dureeM1 = parseInt(prompt("minute?"));
var dureeS1 = parseInt(prompt("seconde?"));

var dureeH2 = parseInt(prompt("heure?"));
var dureeM2 = parseInt(prompt("minute?"));
var dureeS2 = parseInt(prompt("seconde?"));
var resultS1;
var resultS2;

var diffS;
var reste ;
var resultS;
var resultM;
var resultH;

resultS1 = (((dureeH1*60)+dureeM1)*60)+dureeS1;
resultS2 = (((dureeH2*60)+dureeM2)*60)+dureeS2;

diffS = resultS2 - resultS1;

resultS = diffS%60;
reste   = diffS-resultS;
resultM = (reste/60)%60;
reste   = diffS-resultS-(resultM*60);
resultH = reste/3600;

console.log("il y a une différence de "+diffS+" seconde(s), c-à-d "+resultH+" heure(s), "+resultM+" minute(s) et "+resultS+" seconde(s).");