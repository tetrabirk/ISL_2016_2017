var xhr = new XMLHttpRequest();
var url = 'http://localhost/ISL_2016_2017/script_client/SC_2017_01_12_Ajax/include/lieux.php?';
xhr.open('GET', url);

xhr.send();


xhr.onreadystatechange = function(){
    switch (xhr.readyState){
        case xhr.DONE:
            if(xhr.status === 200) {
                console.log(JSON.parse(xhr.responseText));
            }else{
                console.log(xhr.statusText);
                
            }
    }
};