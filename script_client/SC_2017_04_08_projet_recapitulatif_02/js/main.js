var qId=1;
var qdata;
var reponses=[];
var nbreQuestions =5;

function afficherQuestion(data){
    $('.question').text(data['question']);
    
}
function afficherPropositions(data){
    var html ='';
//    var reponse = getReponse();
    
        $.each((data['propositions']),function(key,value){
            html +="<input type='radio' name='proposition' class='proposition' value="+(key+1);
            if(parseInt(reponses[qId-1])===(key+1)){
                html +=" checked ";
            }
            html +=">" + value +"<br/>";
        });
        $('#propositions').html(html);
}


    
function loadPage(id, action){
        $(document).ready(function(){
    //-----requete ajax
            $.get('src/quizz.php',{question:id},function(data){
                var qdata= data;
                afficherQuestion(qdata);
                afficherPropositions(qdata);
                limitButton(id);
                if(action ==='correction'){
                    comparaisonReponse(qdata);
                }
            },'json');
        });
}


function selection(){
    var selection = $("input[name=proposition]:checked").val();
    return selection;
    
    
}

function comparaisonReponse(data){
    var reponse = parseInt(reponses[qId-1]);
    var solution = data['correct'];

    if(reponse === solution){
        $("input[name=proposition]:checked").css('background-color','limegreen');
    }
}

function affErreur(type){
    var msg ='';
    switch(type){
        case 'selection':
            msg = 'Veuillez répondre à cette question';
            break;
        case 'reset':
            msg = '';
            break;
        default :
            msg = "une erreur s'est produite";
    }
    $('#msg').text(msg);
    if(type === 'reset'){
        $("#main").css('background-color','').css('border-color','');
    }else{
        $('#main').css('background-color','lightpink').css('border-color','red');
    }
    
}

function stockerReponse(){
    reponses[qId-1] = selection();
    console.log(reponses);
    
}

//buttons
function limitButton(id){
    if(id===1){
        $('#precedente').prop("disabled",true);
    }else{
        $('#precedente').prop("disabled",false);
    }
    if(id === nbreQuestions){
        $('#suivante').prop("disabled",true);
    }else{
        $('#suivante').prop("disabled",false);
    }
    if (reponses.length <nbreQuestions){
        $('#valider').prop("disabled",true);
    }else{
        $('#valider').prop("disabled",false);
    }
}

$('#propositions').change(function(){
    if(qId === nbreQuestions){
        $('#valider').prop("disabled",false);
    }
});


//suivant
$('#suivante').click(function() {
    if(selection() === undefined){
        affErreur('selection');
    }else if(selection()){
        stockerReponse();
        qId++;
        affErreur('reset');
        loadPage(qId);
    }
        
});
//precedent
$('#precedente').click(function() {
    stockerReponse();
    qId--;
    loadPage(qId);
});

//valider

$('#valider').click(function(){
    stockerReponse();
    qId =1;
    affErreur('reset');
    loadPage(qId,'correction');
});

loadPage(qId);







//test

$('#test').click(function() {
    selection();
});