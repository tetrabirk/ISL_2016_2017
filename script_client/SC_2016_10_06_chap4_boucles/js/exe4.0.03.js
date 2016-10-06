//Écrivez un algorithme affichant la somme des nombres entiers positifs inférieurs à
//1000 et divisibles par 3 ou 5

var result =0;

for (i=0;i<1000;i++){
    if(i%3===0||i%5===0){
        result +=i;
    }
}

console.log(result);