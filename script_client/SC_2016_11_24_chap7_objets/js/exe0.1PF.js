//Énoncé 1 : extraire les codes ASCII de tous les
//caractères d'une chaîne de test, les afficher et les
//stocker dans un tableau. Ensuite, passer le tableau
//dans une boucle et pour chacun des codes ASCII,
//afficher le caractère correspondant.

function stringToAscii(string){
    var obj=string.split('');
    var obj_ascii;
    console.log(obj);
    for(var i=0, max=obj.length;i<max;i++){
        console.log(obj[i].charCodeAt(0));
 
    }
    
    return obj_ascii;
}

//var chaine = prompt("dit moi quelque chose");
var chaine = "test";



console.log(stringToAscii(chaine));