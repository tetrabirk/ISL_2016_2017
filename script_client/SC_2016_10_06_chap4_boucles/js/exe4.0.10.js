//Afficher les 15 premiers termes de la suite de Fibonacci :
//• valeur n+2 = valeur n+1 + valeur n
//• Avec valeur1 = 0 et valeur2 = 1
//
//var val1= 0;
//var val2= 1;
//var result;
//for (n=0;n<15;n++){
//    if(n===0){
//        result=val1;
//    }else{
//        result= (val1+val2);
//        if(n%2!==0){
//            val2=result;
//        }else{
//            val1=result;
//        }
//    }
//    console.log(result);
//}


var val1 =0;
var val2 =1;
var val3;
var result;
var message =val1+' '+val2+' ';

for (n=2;n<15;n++){
    val3=val1+val2;
    message+=val3+' ';
    val1=val2;
    val2=val3;
}
console.log(message);