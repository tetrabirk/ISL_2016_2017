//Énoncé 1 : extraire les codes ASCII de tous les
//caractères d'une chaîne de test, les afficher et les
//stocker dans un tableau. Ensuite, passer le tableau
//dans une boucle et pour chacun des codes ASCII,
//afficher le caractère correspondant.

function stringToAscii(string){
    var tabstring=string.split('');
    var tabAscii = new Array();
    for(var i=0, max=tabstring.length;i<max;i++){
        tabAscii[i]=(tabstring[i].charCodeAt(0));
 
    }
    
    return tabAscii;
}

var chaine = prompt("dite moi quelque chose");


console.log(chaine);

chaineAscii=stringToAscii(chaine);
var log ="";

for(var i=0, max= chaineAscii.length;i<max;i++){
    
    log +="\'"+chaine[i]+"\' = "+chaineAscii[i]+", ";
    
}
console.log(log);