
var selected = {pays: '', regions: '', communes: '', localites: ''};


function getdata(requete) {
    $.ajax({
        type: 'GET',
        url: 'lieux.php',
        data: requete,
        dataType: 'json',
        success: function (data) {
//            resetOption();
//            afficheSelected();
            updateForm(data);
            
        },
        error: function (data, status, err) {
            $("content").text("error" + data.statut + " - " + status + " - " + err);
        },
        timeout: 2000
    });
}


function setSelected(e){
    var key = e.target.id;
    var value = e.target.value;    
    if (key==='pays'){
        selected = {pays: value};
    }else if(key==='regions'){
        selected.regions = value;
    }else if(key==='communes'){
        selected.communes = value;
    }else if(key==='localites'){
        selected.localites = value;
    }
        console.log(selected);

}



$('form select').change(function(e){
    setSelected(e);
    getdata(selected);
    
});
        
function resetOption(){
    $(object).each(function(index,value){
        $("#"+value.id).html("");
    });
    console.log('reset');

    
}

//function afficheSelected(){
//    $.each(selected,function(index,value){
//        if(value !==''){
//            $("#"+index+"").html(newOption(value));
//        }
//    });
//}

function updateForm(data) {
    
    var key = Object.keys(data)[0];
    console.log(key);
    $("#"+key+"").html("");
    $("#"+key+"~select").each(function(index,value){
        $("#"+value.id).html("");
    });
    
    $(data[key]).each(function(index,value){
       $("#"+key+"").append(newOption(value));
    });
    
}

function newOption(option) {
    var html = "<option value=" + option + ">" + option + "</option>";
    return html;
}

$(document).ready(function () {
    getdata();
});