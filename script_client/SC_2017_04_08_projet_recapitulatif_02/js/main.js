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
    if (selection === undefined){
        return 0;
    }else{
        return selection;    
    }
    
    
    
}

function comparaisonReponse(data){
    var reponse = parseInt(reponses[qId-1]);
    var solution = data['correct'];
//    console.log(reponse + ' ' + solution);
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
        case 'manquante':
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

function reponseManquante(){ //retourne le numéro de la première question non répondue, si tt les réponses sont donnée elle retournera 0
    return (reponses.indexOf(0)+1);
    
}

function nbreReponsesCorrectes(data){
//   var points = 0;
//    $.each((data['correct']),function(key,value){
//        if (value === reponses[key]){
//            points++;
//            console.log(+1);
//        }
//    });
//    return points;
}

function afficherResultats(data){
//    var html = '';
//    var points = nbreReponsesCorrectes(data);
//    html += "<p>RESULTATS : "+points+"/"+nbreQuestions+"</p>";
//    $("#msg").html(html);
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
    
    if (qId !== nbreQuestions){
        $('#valider').prop("disabled",true);
    }else{
        $('#valider').prop("disabled",false);
    }
    if (correction){
        $('#valider').css("display",'none');
    }
}

//$('#propositions').change(function(){
//    if(qId === nbreQuestions){
//        $('#valider').prop("disabled",false);
//    }
//});


//suivant
$('#suivante').click(function() {
    stockerReponse();
    qId++;
    affMsg('reset');
    loadPage(qId);

        
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
    
    if (reponseManquante()){
        qId = reponseManquante();
        affMsg('manquante');
    }else{
        qId = 1;
        correction = true;
        affMsg('reset');
    }

    loadPage(qId);
});


loadPage(qId);