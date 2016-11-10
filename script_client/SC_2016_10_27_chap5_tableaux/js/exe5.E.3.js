//E3. Un tableau à une dimension contient des entiers triés en ordre croissant. Écrire un
//algorithme qui recherche la position du dernier élément du tableau inférieur ou égal
//à une valeur entière lue au clavier. Si la valeur est inférieure au premier élément du
//tableau, l'algorithme fournira comme valeur de la position, l'indice du premier
//élément moins 1.

var tab=[1,12,23,34,45,56,67,78,89];

var nbre= parseInt(prompt("kèss tu cherch' ?"));

for (var i = 0,max = tab.length ; i < max; i++) {
    if(tab[0]>nbre){
        console.log("position du dernier nbre <= à "+nbre+" : -1");
        break;
    }else if(tab[i]>nbre){
        console.log("position du dernier nbre <= à "+nbre+" : "+(i-1));
        break;
    }
}