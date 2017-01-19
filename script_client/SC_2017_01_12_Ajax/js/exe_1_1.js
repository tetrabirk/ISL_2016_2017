var xhr = new XMLHttpRequest();
var url = 'include/lieux.php';
//var url = 'http://localhost/projects/ISL_2016_2017/script_client/SC_2017_01_12_Ajax/include/lieux.php';

var data ={};

xhr.open('GET', url);

xhr.send(null);

function optionselect(array){
    var html = "";
    for (var i=0, max= array.length; i<max; i++){
                    
                    var temp = array[i];
                    html += "<option value='"+temp+"'>"+temp+"</option>";
                    
                }
    return html;
}

xhr.onreadystatechange = function(){
    switch (xhr.readyState){
        case xhr.DONE:
            if(xhr.status === 200) {
                data = JSON.parse(xhr.responseText);
                
                var pays= document.getElementById("pays");
                var regions= document.getElementById("regions");
                var communes= document.getElementById("communes");
                var localites= document.getElementById("localites");
                
                var ihp = optionselect(data.pays);//Inner Html Pays
                if (typeof data.regions !== 'undefined' ){
                    var ihr = optionselect(data.pays);//Inner Html Regions;
                }
                console.log(pays.childNodes[0]);
                    
                var ihc = "";//Inner Html Communes
                var ihl = "";//Inner Html Localites
                
                
                pays.innerHTML = ihp;
                
                                
            }else{
                console.log(xhr.statusText);
                
            }
    }
};

