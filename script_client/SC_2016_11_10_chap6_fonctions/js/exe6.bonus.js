//1. Les facteurs premiers de 13195 sont 5, 7, 13 et 29. Quel est le plus grand facteur
//premier du nombre 600851475143 ? (réponse = 6857)

var premiers = [2];

for(var i=0; i<10; i++){
    for(var j=0;i<10 || j<10 ;j++){
        console.log(j);
        if(i%premiers[j]===0){
            premiers.push(i);
        }
    }
}
console.log(premiers);
console.log("test");

//2. Un nombre palindrome est un nombre qui reste le même quel que soit le sens de la
//lecture. Le plus grand nombre palindrome résultant du produit de deux nombres de
//deux chiffres est 9009 = 91 × 99. Trouvez le plus grand nombre palindrome
//résultant du produit de deux nombres de trois chiffres. (réponse = 906609)




//3. 2520 est le plus petit nombre entier divisible par tous les entiers de 1 à 10. Quel est
//le plus petit nombre entier divisible par tous les entiers de 1 à 20 ? (réponse =
//232792560)




//4. Les nombres 2, 3, 5, 7, 11 et 13 sont les six premiers nombres premiers. Quel est le
//10001ème nombre premier ? (réponse = 104743)




//5. Un triplet pythagoricien est un ensemble de nombres naturels a, b et c tels que,
//a<b<c et a
//2+b
//2=c
//2 Par exemple 3, 4 et 5 : 32+42= 52
//.
//Il existe un seul triplet pythagoricien pour lequel a+b+c=1000. Donnez le produit
//a.b.c (réponse = 31875000)

