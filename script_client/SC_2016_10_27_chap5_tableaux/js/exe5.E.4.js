//Un tableau à une dimension contient des entiers triés en ordre croissant. Écrire un
//algorithme qui calcule le nombre d'entiers du tableau strictement compris entre
//deux valeurs lues au clavier.

var tab=[1,12,23,34,45,56,67,78,89];

var vmin= parseInt(prompt("val-min"));
var vmax= parseInt(prompt("val-max"));
var cpt=1;
for (var i = 0,max = tab.length ; i < max; i++) {
    if(tab[i]>vmin&&tab[i]<vmax){
        cpt++;
    }
    
}
console.log("il y a "+cpt+" valeur comprise entre "+vmin+" et "+vmax);