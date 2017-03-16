$(document).ready(function(){
    $('#color').click(function(e){
        console.log(e); 
    });
    var tapp = '';
    $('body').on('keypress',function(e){
        var char = String.fromCharCode(e.which);
        $('#text').text(char);
    });
});