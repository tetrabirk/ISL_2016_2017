//3)Vous devez charger le contenu de la page dom-ex-
//02.html, ajouter un bouton dans le header. Lorsque vous
//cliquez sur ce bouton, et à l'aide des propriétés et
//méthodes vues dans ce chapitre, vous transformez le
//contenu de la page pour qu'il ressemble au rendu de domex-03.html

var button = document.getElementById('button');

//var element_cible = document.getElementById("point2");
//var nouvel_element = document.createElement('li');
//var texte_nouvel_element = document.createTextNode('Teston voir');
//
//nouvel_element.appendChild(texte_nouvel_element);
//element_cible.insertBefore(nouvel_element, element_cible.firstChild);
//

var point2 = document.getElementById('nav').firstChild;

console.log(point2);

function test(){
        console.log('test');
        console.log(document.getElementById("point1"));
        
        
        
    }
        
button.addEventListener('click',test,false );

