//G3. Soit u un tableau à une dimension d'entiers non nuls. Soit v un tableau à une
//dimension de même taille que u et dont les éléments sont 0 ou 1. La compression
//de u par v est le tableau w à une dimension dont les éléments sont dans l'ordre
//ceux du tableau u pour lesquels l'élément correspondant (de même indice) de v est
//1. Exemple : u = [1, 2, 3, 4, 5, 6, 7] v = [0, 1, 1, 0, 1, 0, 1] w = [2, 3, 5, 7, 0, 0, 0]
//Écrire un algorithme qui réalise une telle compression. Les tableaux u et v seront
//initialisés à leur déclaration et affichés avant le tableau w.

u=[1,2,3,4,5,6,7];
v=[0,1,1,0,1,0,1];
w=[];
cpt=0;
for (var i = 0, max = u.length ; i < max; i++) {
    if(v[i]===1){
        w.push(u[i]);
    }else{
        cpt++;
    }
}
for (var i=0; i<cpt;i++){
    w.push(0);
}
console.log(w);