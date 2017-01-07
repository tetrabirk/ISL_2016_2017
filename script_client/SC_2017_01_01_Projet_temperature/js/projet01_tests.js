var jour_semaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche']; //tableau contenant les jours de la semaine
var cons_min = -5; //constante température minimal
var cons_max = 25; //constante température maximal

var tp_semaine = []; //temperature semaine - tableau qui contiendra les relevé
var tp_avg = 0; // temperature average - moyenne des temparature

function in_array(val, array){ //fonction qui vérifie si une valeur est dans un tableau
    for(var i=0, max= array.length; i<max; i++){
        if(val === array[i]){
            return true;
        }
    }
    return false;
}
function encodageSemaine() { //fonction d'encodage des temperatures
    var tp_semaine = []; //temperature semaine - tableau
    for (var i = 0, max = jour_semaine.length; i < max; ){
        var temp = 0; //variable temporaire pour stocké la valeur entrée par l'utilisateur
        // arrondi (transformation en nombre flottant( prompt("")*100)/100<-- pour garder 2 nombres après la virgules
        temp = Math.round(parseFloat(prompt("quelle temperature a-t-il fait " + jour_semaine[i] + "? (en degré Celcius)"))*100)/100;
        //verification si temp n'est pas un nombre OU non compris entre les constantes OU vide 
        if(isNaN(temp)||temp>cons_max || temp<cons_min || temp ===''){
            alert("la temperature doit être comprise entre "+cons_min+"°C et "+cons_max+"°C et être exprimée en chiffre");
            
        }else{
            tp_semaine[i] = temp; //encodage de la t° dans l'array
            i++; //compteur +1
        }
    }
    return tp_semaine;
}

function minMaxMoy(array){ //fonction qui calcule le max, le minimum et la moyenne des valeures données
    var minimum = []; //tableau qui contiendra tt ce qui concerne le minimum
    var maximum = []; //tableau qui contiendra tt ce qui concerne le maximum
    minimum.pos = []; //positions des minimums
    maximum.pos = []; //positions des maximums
    var somme =0; // somme des valeurs
    var max = array.length; //taille du tableau
    var result = []; //resultat
    for (var i = 0; i<max ; i++){ //pour chaque element du tableau
        somme += array[i];
        
        if(i===0){ // si c'est le premier tour
            minimum.val = array[i];  //declaration des 'valeurs' min et max ainsi que de leur 'positions'
            maximum.val = array[i];
            minimum.pos[0] = i;
            maximum.pos[0] = i;
        }else{
            if (array[i]===minimum.val){ //si la val minium reapartait
                minimum.pos.push(i);    //on retient sa position 
            }
            if (array[i]===maximum.val){//si la val maximum reapartait
                maximum.pos.push(i);    //on retient sa position 
            }
            if (array[i]<minimum.val){ // si on a une nouvelle valeurs minimum
                minimum.val = array[i];// on réécrit sur la variable 'val'
                minimum.pos = [];      // on vide la variable 'pos' 
                minimum.pos[0] = i;    // et on retient la nouvelle position
            }
            if (array[i]>maximum.val){ // si on a une nouvelle valeurs maximum
                maximum.val = array[i];// on réécrit sur la variable 'val'
                maximum.pos = [];      // on vide la variable 'pos' 
                maximum.pos[0] = i;    // et on retient la nouvelle position
            }
            
        }     
    }
    
    result.moyenne = Math.round(somme/max*100)/100; //on calcule la moyenne à 2décimales près
    result.minimum = minimum;
    result.maximum = maximum;
    return result;
}

function affichage_resultat(releves){ //fonction d'affichage des résultats en baragraphe
    tp_semaine = releves; //temparture de la semaine
    cl="";  //console log
    maxi= tp_semaine.length; //taille du tableau tp_semaine
    var etoile = 0; //nombre de '*' à afficher 
    var mmm = minMaxMoy(tp_semaine); //var qui stockera le resultat de la fonction minMaxMoy
        
    cl+="  Relevé des temperatures de cette semaine\n\n";
    cl+=" |-5|00|05|10|15|20|\n";
    for(i=0;i<maxi;i++){ //pour chaque jour de la semaine
        etoile = Math.round((tp_semaine[i]+5)/2.5); //conversion de la T° en '*'
        
        cl += jour_semaine[i].charAt(0).toUpperCase()+"|"; //on garde la première lettre de chaque jour de la semaine et on la met en majuscule
        for (j = 0; j<12;j++){  //12 etoiles possible entre -5 et 25
            if(j%2===0){        //si on est sur une colonne impaire
                if (j<etoile){  //si on a pas fini d'afficher la T°
                    cl +="*";
                }else{          //si on a fini d'afficher la T°
                    cl +=" ";
                }
            }else{              //si on est sur une colonne paire
                if (j<etoile){  //si on a pas fini d'afficher la T°
                    cl +="*|";
                }else{
                    cl +=" |";  //si on a fini d'afficher la T°
                }
            } 
        }
        cl += " // Température = "+tp_semaine[i]+" °C"; 
        if(in_array(i, mmm.maximum.pos)){ //si c'est le jour de la T° MAX
            cl +=" MAX";
        }
        if(in_array(i, mmm.minimum.pos)){ //si c'est le jour de la T° MIN
            cl +=" MIN";
        }
        cl += "\n";
    }
    cl += "\n";
    cl += "T° minimum = "+mmm.minimum.val+" °C, T° maximum = "+mmm.maximum.val+" °C, T° moyenne = "+mmm.moyenne+" °C";
    
    console.log(cl);
}
tp_semaine = encodageSemaine();//appel de la fonction encodage
affichage_resultat(tp_semaine);//appel de la fonction affichage


//
//function valMin(array){
//    var minimum;
//    for (var i = 0, max = array.length; i<max ; i++){
//        if(i===0){
//            minimum = array[i];
//        }else{
//            if (array[i]<minimum){
//                minimum = array[i];
//            }
//        }     
//    }
//    return minimum;
//}
//function valMax(array){
//    var maximum;
//    for (var i=0, max = array.length; i<max; i++){
//        if(i===0){
//            maximum = array[i];
//        }else{
//            if (array[i]>maximum){
//                maximum = array[i];
//            }
//        }
//    }
//    return maximum;
//}
//
//function arrayAverage(array){
//    var somme =0;
//    var moyenne=0;
//    var max = array.length;
//    for (var i=0; i<max; i++){
//        somme += array[i];
//    }
//    moyenne = somme/max;
//    return moyenne;
//}



