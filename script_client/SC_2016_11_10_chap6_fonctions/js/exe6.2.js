//Série 6.2 (tableaux)
//
//1. Écrire la procédure (init) qui initialise un tableau à une dimension d’entiers avec une
//valeur donnée. Exemple d’appel : init(t, n, val).

function init(t,n,val){
    
    for (var i = 0, max = n; i < max; i++) {
        t[i]=val;
    }
    return t;
}

var tab=[];

init(tab,3,4);

console.log("6.2.1");
console.log(tab);

//2. Écrire la procédure (affiche) qui affiche les éléments d’un tableau à une dimension
//d’entiers donnés depuis un indice donné jusqu’à un autre indice donné. Exemple
//d’appel : affiche(t, 20, 5, 10).

function affiche (t,dim,i1,i2){
    for(var i=i1, max= i2; i<max;i++){
        t[i]= dim;
    }
}


//3. Écrire la procédure (copy) qui recopie un tableau à une dimension d’entiers dans un
//autre tableau donné. Exemple d’appel : copy(dest, orig, n).
//
//4. Écrire la fonction (iMax) qui recherche la première position où apparaît le maximum
//d’un
// tableau donné à une dimension d’entiers. Exemple d’appel : i = iMax(t, n).
//
//5. Écrire la fonction (rechLin) qui détermine si une valeur donnée appartient à un
//tableau donné à une dimension d’entiers. Le tableau n'est pas supposé trié. Si la
//valeur se trouve dans le tableau, la fonction renvoie sa position, sinon elle renvoie –
//1. Exemple d’appel : i = rechlin(t, n, 5).
//
//6. Écrire la fonction (rechdicho) qui détermine si une valeur donnée appartient à un
//tableau donné à une dimension d’entiers. Le tableau est supposé trié. Si la valeur
//se trouve dans le tableau, la fonction renvoie sa position, sinon elle renvoie –1.
//
//7. Écrire la fonction (iMinGE) qui recherche la position du plus petit élément qui dans
//un tableau donné, est supérieur ou égal à une valeur donnée. Le tableau est
//supposé trié en ordre croissant. Si la valeur donnée est plus grande que le dernier
//élément du tableau, la fonction renvoie comme valeur la position du dernier élément
//plus un.
//
//8. Écrire la fonction (iMaxLT) qui recherche la position du plus grand élément qui dans
//un tableau donné, est strictement inférieur à une valeur donnée. Le tableau est
//supposé trié en ordre croissant. Si la valeur donnée est plus petite que le premier
//élément du tableau, la fonction renvoie comme valeur la position du premier
//élément moins un.
//
//9. Écrire la fonction (iMaxLE) qui recherche la position du plus grand élément qui dans
//un tableau donné, est inférieur ou égal à une valeur donnée. Le tableau est
//supposé trié en ordre croissant. Si la valeur donnée est plus petite que le premier
//élément du tableau, la fonction renvoie comme valeur la position du premier
//élément moins un.
//
//10. Écrire la procédure ou fonction (union) qui recopie dans un seul tableau les
//éléments appartenant à l’un ou l’autre de deux tableaux donnés. Les deux
//tableaux sont supposés triés en ordre croissant, n’ont pas nécessairement la même
//taille et ne seront parcourus qu’une seule fois. Le troisième tableau restera trié en
//ordre croissant à tout moment de son remplissage. La procédure renverra
//également le nombre logique d’éléments du troisième tableau.
//
//11. Écrire la procédure ou fonction (inter) qui recopie dans un seul tableau les
//éléments appartenant à l’un et l’autre de deux tableaux donnés. Les deux tableaux
//sont supposés triés en ordre croissant, n’ont pas nécessairement la même taille et
//ne seront parcourus qu’une seule fois. Le troisième tableau restera trié en ordre
//croissant à tout moment de son remplissage. La procédure renverra également le
//nombre logique d’éléments du troisième tableau.
//
//12. Écrire la procédure ou fonction (diff) qui recopie dans un seul tableau les éléments
//appartenant au premier mais pas au deuxième de deux tableaux donnés. Les deux
//tableaux sont supposés triés en ordre croissant, n’ont pas nécessairement la même
//taille et ne seront parcourus qu’une seule fois. Le troisième tableau restera trié en
//ordre croissant à tout moment de son remplissage. La procédure renverra
//également le nombre logique d’éléments du troisième tableau.
//
//13. Écrire la procédure ou fonction (diffSym) qui recopie dans un seul tableau les
//éléments appartenant à un seul des deux tableaux de deux tableaux donnés. Les
//deux tableaux sont supposés triés en ordre croissant, n’ont pas nécessairement la
//même taille et ne seront parcourus qu’une seule fois. Le troisième tableau restera
//trié en ordre croissant à tout moment de son remplissage. La procédure renverra
//également le nombre logique d’éléments du troisième tableau. 
