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

//var tab=[];
//
//init(tab,3,4);
//
//console.log("6.2.1");
//console.log(tab);

//2. Écrire la procédure (affiche) qui affiche les éléments d’un tableau à une dimension
//d’entiers donnés depuis un indice donné jusqu’à un autre indice donné. Exemple
//d’appel : affiche(t, 20, 5, 10).
//
//aucune idée à quoi sert le 'n'
//
//j'ai un probleme avec l'énoncé donc je n'ai pas fini l'exercice

function affiche (tab,ind1,ind2){
    var t=tab;
    var i1 = ind1;
    var i2 = ind2;
    var show ="";
    for(var i=i1, max= i2; i<max;i++){
        show += t[i]+", ";
    }
    return show;
}
//var t1 = [-7,-30,45,21,13,0,15,56,7];
//
//console.log(affiche(t1,5,9));


//3. Écrire la procédure (copy) qui recopie un tableau à une dimension d’entiers dans un
//autre tableau donné. Exemple d’appel : copy(dest, orig, n).


//XXXXX XXXX  XXXX  XXXXX X   X XXXX
//X     X   X X   X X     X   X X   X
//XXX   XXXX  XXXX  XXX   X   X XXXX
//X     X  X  X  X  X     X   X X  X
//XXXXX X   X X   X XXXXX  XXX  X   X


function copy (dest, orig, n){
    var d = dest;
    var o = orig;
    
    for (var i=0, max= o.length; i<max; i++){
        d[i]=o[i];
    }
    orig = o;
}

//var tab=[2,3,5,8];
//var tabcopy=[];
//
//copy(tab,tabcopy,0);
//
//console.log(tab);
//console.log(tabcopy);

//4. Écrire la fonction (iMax) qui recherche la première position où apparaît le maximum
//d’un
// tableau donné à une dimension d’entiers. Exemple d’appel : i = iMax(t, n).
//
//aucune idée à quoi sert le 'n'

function iMax (tab,n){
    var t= tab;
    var temp = t[0];
    for(var i=0,max=t.length;i<max;i++){
       if(t[i]>temp){
           temp = t[i];
       }
    }
    return temp;
}

//var t1 = [-7,-30,45,21,13,0,15,56,7];
//
//console.log(iMax(t1,0));


//5. Écrire la fonction (rechLin) qui détermine si une valeur donnée appartient à un
//tableau donné à une dimension d’entiers. Le tableau n'est pas supposé trié. Si la
//valeur se trouve dans le tableau, la fonction renvoie sa position, sinon elle renvoie –
//1. Exemple d’appel : i = rechlin(t, n, 5).

//aucune idée à quoi sert le 'n'

function rechLin(tab,n,val){
    var t=tab;
    var nbr=val;
    var pos;
    for(var i=0, max=t.length;i<max;i++){
        if(nbr===t[i]){
            pos=i;
            break;
        }else{
            pos=-1;
        }
    }
    return pos;
}
//var t1 = [-7,-30,45,21,13,0,15,56,7];
//
//console.log(rechLin(t1,0,7));

//6. Écrire la fonction (rechdicho) qui détermine si une valeur donnée appartient à un
//tableau donné à une dimension d’entiers. Le tableau est supposé trié. Si la valeur
//se trouve dans le tableau, la fonction renvoie sa position, sinon elle renvoie –1.

//je ne sais pas trop comment faire les fct "dichtomique"

function rechdicho(tab, val){
    
    
    
    
}    
//7. Écrire la fonction (iMinGE) qui recherche la position du plus petit élément qui dans
//un tableau donné, est supérieur ou égal à une valeur donnée. Le tableau est
//supposé trié en ordre croissant. Si la valeur donnée est plus grande que le dernier
//élément du tableau, la fonction renvoie comme valeur la position du dernier élément
//plus un.

function iMinGE(tab, val){
    var t=tab;
    var n=val;
    var pos;
    for(var i=0, max=t.length; i<max; i++){
        if(t[i] >= n){
            pos=i;
            break;
        }else{
            pos=max;
        }
    }
    return pos;
}
//
//var t1 = [1,12,23,34,45,56,67,78,89];
//
//console.log(iMinGE(t1,89));



//8. Écrire la fonction (iMaxLT) qui recherche la position du plus grand élément qui dans
//un tableau donné, est strictement inférieur à une valeur donnée. Le tableau est
//supposé trié en ordre croissant. Si la valeur donnée est plus petite que le premier
//élément du tableau, la fonction renvoie comme valeur la position du premier
//élément moins un.

function iMaxLT(tab, val){
    var t=tab;
    var n=val;
    var pos;

    for(var i=0, max=t.length; i<max; i++){
        if(t[i] >= n){
            pos=i-1;
            break;
        }else{
            pos=-1;
        }
    }
    return pos;
}

//
//var t1 = [1,12,23,34,45,56,67,78,89];
//
//console.log(iMaxLT(t1,45));


//9. Écrire la fonction (iMaxLE) qui recherche la position du plus grand élément qui dans
//un tableau donné, est inférieur ou égal à une valeur donnée. Le tableau est
//supposé trié en ordre croissant. Si la valeur donnée est plus petite que le premier
//élément du tableau, la fonction renvoie comme valeur la position du premier
//élément moins un.

function iMaxLE(tab, val){
    var t=tab;
    var n=val;
    var pos;

    for(var i=0, max=t.length; i<max; i++){
        if(t[i] > n){
            pos=i-1;
            break;
        }else{
            pos=-1;
        }
    }
    return pos;
}

//
//var t1 = [1,12,23,34,45,56,67,78,89];
//
//console.log(iMaxLE(t1,45));
//


//10. Écrire la procédure ou fonction (union) qui recopie dans un seul tableau les
//éléments appartenant à l’un ou l’autre de deux tableaux donnés. Les deux
//tableaux sont supposés triés en ordre croissant, n’ont pas nécessairement la même
//taille et ne seront parcourus qu’une seule fois. Le troisième tableau restera trié en
//ordre croissant à tout moment de son remplissage. La procédure renverra
//également le nombre logique d’éléments du troisième tableau.

function union (tabA,tabB){
    var tA= tabA;
    var tB= tabB;
    var tC=[];
    var cptA=0;
    var cptB=0;
    
    for(var i=0, max=(tA.length+tB.length); i<max; i++){
        if(tA[cptA] < tB[cptB] || cptB <tB.length) {
            tC[i] = tA[cptA];
            cptA++;
        }else if(tA[cptA] > tB[cptB] || cptA <tA.length) {
            tC[i] = tB[cptB];
            cptB++;
        }else if(tA[cptA] === tB[cptB]) {
            tC[i] = tA[cptA];
            i++;
            cptA++;
            tC[i] = tB[cptB];
            cptB++;
        }
    }
    return tC.length+" : "+tC;
}
//var t1 = [1,12,23,34,45,56,67,78,89];
//var t2 = [5,17,19,34,48,57,58,78,79,79,85];
//
//console.log(union (t1,t2));

//11. Écrire la procédure ou fonction (inter) qui recopie dans un seul tableau les
//éléments appartenant à l’un et l’autre de deux tableaux donnés. Les deux
//tableaux sont supposés triés en ordre croissant, n’ont pas nécessairement la même
//taille et ne seront parcourus qu’une seule fois. Le troisième tableau restera trié en
//ordre croissant à tout moment de son remplissage. La procédure renverra
//également le nombre logique d’éléments du troisième tableau.

function inter (tabA,tabB){
    var tA= tabA;
    var tB= tabB;
    var tC=[];
    var cptA=0;
    var cptB=0;
    var i=0;
    
    while(cptA<tA.length && cptB<tB.length){
        if(tA[cptA] < tB[cptB]) {
            cptA++;
        }else if(tA[cptA] > tB[cptB]) {
            cptB++;
        }else if(tA[cptA] === tB[cptB]) {
            tC[i] = tA[cptA];
            cptA++;
            i++;
            cptB++;
        }
    }
    return tC.length+" : "+tC;
}
//var t1 = [1,12,23,34,45,56,67,78,89];
//var t2 = [5,17,19,34,48,57,58,78,79,79,85];
//
//console.log(inter (t1,t2));
//


//12. Écrire la procédure ou fonction (diff) qui recopie dans un seul tableau les
//éléments appartenant au premier mais pas au deuxième de deux tableaux donnés. Les
//deux tableaux sont supposés triés en ordre croissant, n’ont pas nécessairement la
//même taille et ne seront parcourus qu’une seule fois. Le troisième tableau restera
//trié en ordre croissant à tout moment de son remplissage. La procédure renverra
//également le nombre logique d’éléments du troisième tableau.

function diff (tabA,tabB){
    var tA= tabA;
    var tB= tabB;
    var tC=[];
    var cptA=0;
    var cptB=0;
    var i=0;
    while(cptA<tA.length){
        if(tA[cptA] < tB[cptB] || cptB <tB.length) {
            tC[i] = tA[cptA];
            i++;
            cptA++;
        }else if(tA[cptA] > tB[cptB]) {
            cptB++;
        }else if(tA[cptA] === tB[cptB]) {
            cptA++;
            cptB++;
        }
    }
    return tC.length+" : "+tC;
}
//var t1 = [1,12,23,34,45,56,67,78,89];
//var t2 = [5,17,19,34,48,57,58,78,79,79,85];
//
//console.log(diff (t1,t2));




//13. Écrire la procédure ou fonction (diffSym) qui recopie dans un seul tableau les
//éléments appartenant à un seul des deux tableaux de deux tableaux donnés. Les
//deux tableaux sont supposés triés en ordre croissant, n’ont pas nécessairement la
//même taille et ne seront parcourus qu’une seule fois. Le troisième tableau restera
//trié en ordre croissant à tout moment de son remplissage. La procédure renverra
//également le nombre logique d’éléments du troisième tableau. 


function diff (tabA,tabB){
    var tA= tabA;
    var tB= tabB;
    var tC=[];
    var cptA=0;
    var cptB=0;
    var i=0;
    while(cptA<tA.length && cptB<tB.length){
        if(tA[cptA] < tB[cptB]) {
            tC[i] = tA[cptA];
            i++;
            cptA++;
        }else if(tA[cptA] > tB[cptB]) {
            tC[i] = tB[cptB];
            i++;
            cptB++;
        }else if(tA[cptA] === tB[cptB]) {
            cptA++;
            cptB++;
        }
    }
    return tC.length+" : "+tC;
}
//var t1 = [1,12,23,34,45,56,67,78,89];
//var t2 = [5,17,19,34,48,57,58,78,79,79,85];
//
//console.log(diff (t1,t2));