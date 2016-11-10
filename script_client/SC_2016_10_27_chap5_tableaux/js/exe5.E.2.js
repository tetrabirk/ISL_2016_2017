//E2. Un tableau à une dimension contient des entiers triés en ordre croissant. Écrire un
//algorithme qui recherche la position du premier élément du tableau supérieur ou
//égal à une valeur entière lue au clavier. Si la valeur est supérieure au dernier
//élément du tableau, l'algorithme fournira comme valeur de la position, l'indice du
//dernier élément plus 1.

var tab=[1,12,23,34,45,56,67,78,89];

var nbre= parseInt(prompt("kèss tu cherch' ?"));

for (var i = 0,max = tab.length ; i < max; i++) {
    if(tab[max-1]<nbre){
        console.log("position du 1er nbre >= à "+nbre+" : "+max);
        break;
    }else if(tab[i]>=nbre){
        console.log("position du 1er nbre >= à "+nbre+" : "+i);
        break;
    }
}