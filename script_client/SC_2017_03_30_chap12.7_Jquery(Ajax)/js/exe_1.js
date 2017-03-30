//$(document).ready(function(){
//    $.get('./include/lieux.php',{},function(data){
//            var result = JSON.parse(data);
//            console.log(result);
//            
//            for (var key in result.pays){
//                var value = result.pays[key];
//                var option ="<option value='"+value+"'>"+value+"</option>";
//                $(option).appendTo('#pays');
//                
//            }
//        });
//    
//    $('#pays').on('change',function(e){
//        var payss = e.target.value;
//        $.get('./include/lieux.php',{pays:payss},function(data){
//            var result = JSON.parse(data);
//            console.log(result);
//        });
//        
//    });
//});

$(document).ready(function(){
    var link = './include/lieux.php';
    var param = {};
    console.log('pays' in param);
    
    testget = function(param,link){ 
        $.get(link,param,function(retour){
            if(!('pays' in param)){
                
            }
                
//            var result = JSON.parse(retour);
//            console.log(result);
//            return result;
        }); 
    };
    
testget(param,link);
    
    
//for (var key in result.pays){
//    var value = result.pays[key];
//    var option ="<option value='"+value+"'>"+value+"</option>";
//    $(option).appendTo('#pays');
//
//}
//    
//    $('#pays').on('change',function(e){
//        var payss = e.target.value;
//        $.get('./include/lieux.php',{pays:payss},function(data){
//            var result = JSON.parse(data);
//            console.log(result);
//        });
//        
//    });
});
