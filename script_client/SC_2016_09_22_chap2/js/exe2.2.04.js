//2.2.4 Écrire un script qui calcule le nombre de billets ou de pièces de 1, 2, 5, 10,
//20, 50, 100, 200, 500 euros nécessaires pour former un montant donné. Il
//calculera le nombre minimal de coupures pour former le montant donné par
//l'utilisateur

var nbre = parseInt(prompt("Montant?"));

var n1;
var n2;
var n5;
var n10;
var n20;
var n50;
var n100;
var n200;
var n500;
var reste;
var result = "pour "+nbre+" € il faudra ";

if (nbre>500){
    n500 = (nbre/500)-((nbre/500)%1);
    reste = nbre-(n500*500);
    result += n500+" billet(s) de 500€, ";
}
if (nbre>200){
    n200 = (reste/200)-((reste/200)%1);
    reste = reste-(n200*200);
    result += n200+" billet(s) de 200€, ";
}
if (nbre>100){
    n100 = (reste/100)-((reste/100)%1);
    reste = reste-(n100*100);
    result += n100+" billet(s) de 100€, ";
}
if (nbre>50){
    n50 = (reste/50)-((reste/50)%1);
    reste = reste-(n50*50);
    result += n50+" billet(s) de 50€, ";
}
if (nbre>20){
    n20 = (reste/20)-((reste/20)%1);
    reste = reste-(n20*20);
    result += n20+" billet(s) de 20€, ";
}
if (nbre>10){
    n10 = (reste/10)-((reste/10)%1);
    reste = reste-(n10*10);
    result += n10+" billet(s) de 10€, ";
}
if (nbre>5){
    n5 = (reste/5)-((reste/5)%1);
    reste = reste-(n5*5);
    result += n5+" piece(s) de 5€, ";
}
if (nbre>2){
    n2 = (reste/2)-((reste/2)%1);
    reste = reste-(n2*2);
    result += n2+" piece(s) de 2€, ";
}
if (nbre>1){
    n1 = reste;
    result += n1+" piece(s) de 1€, ";
}

console.log(result);




