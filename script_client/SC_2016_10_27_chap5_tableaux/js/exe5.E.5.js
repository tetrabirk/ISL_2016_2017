//(insertion) Soit t un tableau à une dimension d'entiers initialisé à sa déclaration. Il
//contient N éléments mais seuls les N-1 éléments sont initialisés. De plus, les
//éléments sont rangés en ordre croissant. Soit nbr un entier quelconque lu au
//clavier. Écrire un algorithme qui insère nbr dans le tableau t de manière à ce que
//les éléments de celui-ci restent rangés en ordre croissant. L'algorithme affichera le
//tableau avant de lire la valeur du nombre à insérer. Il affichera le tableau après
//l'insertion. Exemple : t = [1, 3, 4, 7, 9, 10] et nbr = 5 t = [1, ⇒ 3, 4, 5, 7, 9, 10]
//
var t=[1,12,23,34,45,56,67,78,89];
var nbr= parseInt(prompt("nombre"));
var temp=[];
var insert=false;
console.log(t);
for (var i = 0, max = (t.length+1) ; i < max; i++) {
    if(t[i]<nbr){
        temp[i]=t[i];
    }else if(t[i]>=nbr&&insert===false){
        temp[i]=nbr;
        insert=true;
    }else{
        temp[i]=t[i-1];
    }
    
    
}
t=temp;
console.log(t);
