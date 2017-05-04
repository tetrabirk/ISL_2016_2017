var ctx = document.getElementById("myChart").getContext("2d");

function randomColor(){
    var hue = 'rgb(' + (Math.floor((256-0)*Math.random())) + ','
                     + (Math.floor((256-0)*Math.random())) + ','
                     + (Math.floor((256-0)*Math.random())) + ')';
             return hue;
}
    
function rectangle(x,y,w,h){
    ctx.fillStyle = randomColor();
    ctx.fillRect(x,y,w,h);
    
    
};




$(document).ready(function(){
    var canvas = $('canvas');
    var recW = 10;
//    var recH = recW;
    var start
    var end
    var diff
//    $('canvas').css('width', '800px');
//    $('canvas').width('400px');
    $('canvas').on('mousedown',function(e){
        start= e.timeStamp;
    })
    $('canvas').on('mouseup',function(e){
        end= e.timeStamp;
        diff = end-start;
        
        recW = (diff/10);
        
        var posX = e.pageX - canvas[0].offsetLeft;
        var posY = e.pageY - canvas[0].offsetTop;
        rectangle(posX-(recW/2),posY-(recW/2),recW,recW);
        
        
        
    })
    
    
});
