var jour_semaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
var tp_min = -5;
var tp_max = 25;
var tp_semaine = new Array();
var tp_avg = 0;

function encodageSemaine() {
    for (var i = 0; i < 7; ){
        var temp = 0;
        temp = parseInt(prompt("quelle temperature a-t-il fait " + jour_semaine[i] + "?"));
        if(isNaN(temp)||temp>tp_max || temp<tp_min || temp ===''){
            alert("la temperature doit être comprise entre "+tp_min+"°C et "+tp_max+"°C");
            
        }else{
            tp_semaine[i] = temp;
            i++;
        }
    }
    
    
    

}
encodageSemaine();
console.log(tp_semaine);


