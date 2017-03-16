$(document).ready(function(){
    $('body').on('keydown',function(e){
        var cercle = $('#circle')
        var touche = e.which;
        var offsetTop = cercle.offset().top;
        var offsetLeft = cercle.offset().left;
        var pas = 10;
        switch(touche){
           
            case 38:
                console.log('up');
                cercle.offset({top:offsetTop-pas,left:offsetLeft});
                break;
            case 40:
                console.log('down');
                cercle.offset({top:offsetTop+pas,left:offsetLeft});
                break;
            case 37:
                console.log('left');
                cercle.offset({top:offsetTop,left:offsetLeft-pas});
                break;
            case 39:
                console.log('right');
                cercle.offset({top:offsetTop,left:offsetLeft+pas});
                break;
        }
        
    });
    
});