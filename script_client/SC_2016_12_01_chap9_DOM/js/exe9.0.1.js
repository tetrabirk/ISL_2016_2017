//Exercice 1
//Essayez d'accéder à différents éléments en fonction de
//sélecteurs CSS :
//● Balise
//● Classe
//● Identifiant
//● Balise imbriquée

console.log("//////BALISES///////");

var balises = document.getElementsByTagName('*');

for(var i=0, max=balises.length;i<max;i++){
    console.log(balises[i]);
}

console.log("//////CLASSES///////");


var classe = document.querySelectorAll('.important');
    
    for(var i=0, max=classe.length;i<max;i++){
        console.log(classe[i]);
    }

console.log("//////IDENTIFIANTS///////");


var id = document.getElementById('contenu');
    
    console.log(id);
    



///mouai pas sur de comprendre ce qui se passe ici //


console.log("//////BALISES IMBRIQUEES///////");


var bi = document.getElementById('contenu').childNodes;
    
    console.log(bi);

