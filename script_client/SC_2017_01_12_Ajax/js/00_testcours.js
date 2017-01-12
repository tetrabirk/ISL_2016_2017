var xhr = new XMLHttpRequest();
var val1 = encodeURIComponent("ma valeur préférée");
var val2 = encodeURIComponent("ma deuxième valeur préféréé");
var url = 'http://localhost/ISL_2016_2017/script_client/SC_2017_01_12_Ajax/ajax.php?p1='+ val1 + '&p2=' + val2;
xhr.open('GET',url);

xhr.send('p1=val1&p2=val2');


xhr.onreadystatechange = function(){
    switch (xhr.readyState){
        case xhr.LOADING:
            console.log("donées en cours de réception");
            break;
        case xhr.DONE:
            if (xhr.status === 200){
                console.log("Données bien reçues");
                console.log(JSON(xhr.responseText));
                
            }else{
                console.log(xhr.statusText);
            }
            break;
        
    }
};



