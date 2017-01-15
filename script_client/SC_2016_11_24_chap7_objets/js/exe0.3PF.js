//Affichez le nombre de jour(s) séparant aujourd'hui d'une date encodée
//par l'utilisateur
//24/12/2013

var dateMtn= new Date();
var dateMtnUnix = dateMtn.getTime();

var dateUser= new Date();
var dateUserStrign= prompt("date? format JJ/MM/AAA"); 
var dateUserUnix;
var ecartUnix;
var ecartDays;

dateUser.setDate(dateUserStrign.split('/')[0]);
dateUser.setMonth((dateUserStrign.split('/')[1])-1);
dateUser.setFullYear(dateUserStrign.split('/')[2]);
dateUserUnix = dateUser.getTime();

ecartUnix = dateUserUnix-dateMtnUnix;
ecartDays = ecartUnix/1000/60/60/24;

console.log(ecartDays+" j d'écart");














//
//
//var datemtn= new Array();
//var dateu=new Array;
//var ecart;
//
//datemtn.date= new Date();
//datemtn.annee= datemtn.date.getFullYear();
//datemtn.mois = datemtn.date.getMonth();
//datemtn.jour = datemtn.date.getDate();
//
//dateu.entree= prompt("date? (JJ/MM/AAAA)");
//dateu.annee = parseInt(dateu.entree.split("/")[2]);
//dateu.mois = parseInt((dateu.entree.split("/")[1]))-1;
//dateu.jour = parseInt(dateu.entree.split("/")[0]);
//console.log(datemtn);
//console.log(dateu);
//
//if(datemtn.annee<dateu.annee
//  ||datemtn.annee===dateu.annee && datemtn.mois<dateu.mois
//  ||datemtn.annee===dateu.annee && datemtn.mois===dateu.mois && datemtn.jour<dateu.jour){
//    console.log('après');    
//}else if(datemtn.annee>dateu.annee
//  ||datemtn.annee===dateu.annee && datemtn.mois>dateu.mois
//  ||datemtn.annee===dateu.annee && datemtn.mois===dateu.mois && datemtn.jour>dateu.jour){
//    console.log('avant');    
//}else{
//    console.log('ojd');
//}


