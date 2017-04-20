var qId=1;
var qdata;

$(document).ready(function(){

    $.get('src/quizz.php',{question:qId},function(data){
        console.log(data);
        qdata= data;
        
//----------afficher question
        $('.question').text(qdata['question']);
//----------afficher reponses
        $('.reponse').each(function(){
            console.log('bob');
        });
        
    },'json');
    

    


    $('#test').click(function() {
        $.get('src/quizz.php',{question:qId},function(data){
            console.log(data);
        },'json');
        
    });

});

