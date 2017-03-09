$(document).ready(function () {
    var button = document.getElementById('button');
    var page = 2;
    
    button.addEventListener('click', function () {
        if(page === 2){
            $('#header p').replaceWith('<p>Header du DOM exercice 03</p>');
            $('#point2').replaceWith('<li id="point5"><a href="#">Lien 5</a></li>');
            $('#point3').append('<li id="point4"><a href="#">Lien 4</a></li>');
            $('h1:eq(0)').css('font-size','1.5rem');
            $('#section_optionnelle p:eq(1)').append('avec du texte en plus.');
            $('#section_optionnelle').after("<section id='pub'><p>Pub1</p><p>Pub2</p><p>Pub3</p></section>");
            
            
            
            console.log('test');            
            page = 3;
        }else{
            location.reload();
        }
        
    });
});