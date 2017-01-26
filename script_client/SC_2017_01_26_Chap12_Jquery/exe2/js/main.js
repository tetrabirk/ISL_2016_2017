$(document).ready(function(){
    //li niveau 1
    $('main > ol > li').css('color','red');
    //li niveau 2
    $('main > ol > li > ol > li').css('color','blue');
    //li niveau 3
    $('main > ol > li > ol > li > ol > li').css('color','green');
    //premier li de 'enfant'
    $('main > ol > li:nth-of-type(2) > ol > li:first-of-type').css('color','orange');
    //dernier li de 'bras gauche'
    $('main > ol > li:first-of-type > ol > li:first-of-type > ol > li:last-of-type').css('color','magenta');
    //premier et dernier de pommier
    $('main > ol > li:last-of-type > ol > li:first-of-type,main > ol > li:last-of-type > ol > li:last-of-type').css('color','black');
    
});
