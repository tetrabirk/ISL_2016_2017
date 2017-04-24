var qId=1;
var qdata;
var reponses=[];
var nbreQuestions =5;
var correction = false;

function afficherQuestion(data){
    $('.question').text(data['question']);
    
}
function afficherPropositions(data){
    var html ='';
//    var reponse = getReponse();
    
        $.each((data['propositions']),function(key,value){
            html +="<div class='proposition'><input type='radio' name='proposition' value="+(key+1);
            if(parseInt(reponses[qId-1])===(key+1)){
                html +=" checked ";
            }
            html +=">" + value +"</div>";
        });
        $('#propositions').html(html);
}


    
function loadPage(id){
        $(document).ready(function(){
    //-----requete ajax
            $.get('src/quizz.php',{question:id},function(data){
                var qdata= data;
                afficherQuestion(qdata);
                afficherPropositions(qdata);
                limitButton(id);
                if(correction){
                    comparaisonReponse(qdata);
                    $('input').attr('disabled',true);
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
    console.log(reponse + ' ' + solution);
    if(reponse === solution){
        $("form div:nth-child("+reponse+")").css('background-color','limegreen');
        affMsg('bravo');
    }else{
        $("form div:nth-child("+reponse+")").css('background-color','red');
        $("form div:nth-child("+solution+")").css('background-color','limegreen');
        affMsg('faux');
    }
}

function affMsg(type){
    var msg ='';
    switch(type){
        case 'selection':
            msg = 'Veuillez répondre à cette question';
            $('#main').css('background-color','lightpink').css('border-color','red');
            break;
        case 'bravo':
            msg = 'bonne réponse!';
            break;
        case 'faux':
            msg = 'FAUX!';
            break;
            
        case 'reset':
            msg = '';
            $("#main").css('background-color','').css('border-color','');
            break;
        default :
            msg = "une erreur s'est produite";
    }
    $('#msg').text(msg);
   
    
}

function stockerReponse(){
    reponses[qId-1] = selection();
//    console.log(reponses);
    
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
    if (correction){
        $('#valider').css("display",'none');
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
        affMsg('selection');
    }else if(selection()){
        stockerReponse();
        qId++;
        affMsg('reset');
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
    affMsg('reset');
    correction = true;
    loadPage(qId);
});

loadPage(qId);







//test

$('#test').click(function() {
    selection();
});