//3)Vous devez charger le contenu de la page dom-ex-
//02.html, ajouter un bouton dans le header. Lorsque vous
//cliquez sur ce bouton, et à l'aide des propriétés et
//méthodes vues dans ce chapitre, vous transformez le
//contenu de la page pour qu'il ressemble au rendu de domex-03.html



//"point d'accès"
var button = document.getElementById('button');

var nav_ul = document.getElementById('nav').firstElementChild;
var point2 = document.getElementById('point2');
var h1 = document.getElementById('section_principale').firstElementChild;
var p2 = document.getElementById('section_optionnelle').getElementsByTagName('p')[1];
var footer = document.getElementById('footer');

console.log(footer);
//creation des point 4 et 5
var point4 = point2.cloneNode(true);
var point5 = point2.cloneNode(true);
point4.innerHTML = '<a href="#">Lien 4</a>';
point5.innerHTML = '<a href="#">Lien 5</a>';

//creation du texte a rajouter

var p2_plus = " avec du texte en plus.";

//creation de la section pub
var pub = document.createElement("section");
var pub_txt ='';
for(var i=0; i<3; i++){
    pub_txt += "<p>Pub"+(i+1)+"</p>";
}
pub.innerHTML=pub_txt;


function test(){
        //remplacement du point2 par le point 5
        point2.parentNode.replaceChild(point5,point2);
        //ajout du point4 à la liste
        nav_ul.appendChild(point4);
        //modification de la taille de h1
        h1.style.fontSize = '1.5em';
        //ajout de texte à p2
        p2.textContent += p2_plus;
        //ajout de la section pub avant le footer
        footer.insertBefore(pub,footer.firstChild);
        
        
        
        
        
    }
        
button.addEventListener('click',test,false );

