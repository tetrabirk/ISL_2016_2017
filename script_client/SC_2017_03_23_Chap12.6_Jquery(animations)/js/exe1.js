$(document).ready(function(){
    var error_msg = {};
    $('form input').on('change',function(e){
        var id= e.target.id;
        var value =e.target.value;
        
        switch (id){
            case 'nom':
                if(value.length<2){
                    $('#nom').css('border','1px solid red');
                    add_error("nom","length");
                    
                }else{
                    $('#nom').css('border','1px solid limegreen');
                    add_error("nom","ok");
                }
                break;
            case 'prenom':
                if(value.length<2){
                    $('#prenom').css('border','1px solid red');
                    add_error("prenom","length");
                    
                }else{
                    $('#prenom').css('border','1px solid limegreen');
                    add_error("prenom","ok");
                }
                break;
                
        }
        
        display_errors();
        
    });
    
function add_error(id,type){
    switch(id){
        case 'nom':
            switch(type){
                case 'length':
                    error_msg.nom="Le Nom doit être composé d'au moins au moins deux caractères";
                    break;
                case 'ok':
                    delete error_msg.nom;
                    break;
            }
            break;
        case 'prenom':
            switch(type){
                case 'length':
                    error_msg.prenom="Le Prenom doit être composé d'au moins au moins deux caractères";
                    break;
                case 'ok':
                    delete error_msg.prenom;
                    break;
            }
            break;
    }
    
    
    
}

function display_errors(){
     
    console.log(error_msg);

    if($.isEmptyObject(error_msg)){
        $("<h3>ERREUR</h3>").prependTo($("#erreur"));
        $.each(error_msg,function(){
            
        });
    }
}
    
    
    if(error_msg.length !==0){
        
    }
    $(error_msg).appendTo($("#erreur ul"));
}


});
