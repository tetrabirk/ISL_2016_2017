//E1. (recherche linéaire)Écrire un algorithme qui recherche dans un tableau à une
//dimension d'entiers la position d'une valeur entière lue au clavier. Le tableau sera
//initialisé à sa déclaration et affiché. On supposera que les éléments du tableau ne
//sont pas triés.

var tab=[9,5,1,8,2,7,3,4,6];

var nbre= parseInt(prompt("kèss tu cherch' ?"));

for (var i = 0,max = tab.length ; i < max; i++) {
    if(tab[i]===nbre){
        console.log("position de "+nbre+" : "+i);
    }
}