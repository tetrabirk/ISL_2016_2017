//● veuillez rendre visibles tous les paragraphes invisibles
//(classe hidden) et invisibles tous les visibles (sauf
//celui qui porte l'id no_delete)
//● mettre en classe red toutes les balises qui sont de
//classe blue
//● mettre en Verdana et en vert (classe better_font) les
//balises qui ont les classes default_font et default_color
//● ajouter la classe no_decoration à tous les liens
//● retirer la classe no_bullet de toutes les listes

$(document).ready(function(){
    $('p').each(function(){
        if($(this).hasClass('hidden')){
            $(this).removeClass('hidden');
        }else{
            $(this).addClass('test');
        }
    });
    
    $('*[class ~="blue"]').css('color','red');
    
    $('*[class ~="default_font"]').css('font-family','Verdana');
    
    $('a').each(function(){
        $(this).addClass('no_decoration');
    });
    
    
    $('ul').removeClass('no_bullet');
    
});