function Questionnaire(){
    this.questions = [];
    
//    this.chargerQuizz= function(url){
//        var cpt =1;
//        var qdata ={};
//        var test = true;
//        var QQ = this.questions;
//        do{
//            $.get(url,{question:cpt},function(data){
////                console.log(data);
//                qdata= data;
//                test = qdata.question === undefined;
//                QQ.push(new Question(qdata));
//                console.log(Questionnaire);
//            },'json');
//            cpt++;
//            
//        }
//        while(test && cpt<6); // je devrais pouvoir retirer la 2eme condition mais je n'arrive pas à faire un do while avec mon ajax
//    };
    
    this.loadPage= function(url,id){
        $.get(url,{question:id},function(data){
            if(this.derniereQuestion(data)){
                
            }else{
                this.questions.push[data];
                console.log(this.questions);
            }
        },'json');
    };
    
    
    
    this.derniereQuestion= function(data){
        return data.question === undefined;
    };
           
}