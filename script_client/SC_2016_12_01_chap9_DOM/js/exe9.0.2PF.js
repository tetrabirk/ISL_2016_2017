//Exercice 2
//Vous devez créer un formulaire reprenant le nom, le prénom,
//la date de naissance et l'email d'un élève.
//Si une valeur n'est pas valide (à contrôler à l'aide de regex :
//longueurs du nom et du prénom, format date et email), vous
//afficherez un message (via console.log).
//Lorsque toutes les valeurs sont valides, vous sauvegardez
//celles-ci dans un objet Eleve que vous afficherez ensuite
//dans la console.


//
//var form_bytag = document.getElementsByTagName('form');
//var form_byid = document.getElementById('form');
//
//console.log(form_bytag);
//console.log(form_byid);
//

var testObjet = {};
function checkForm(){
    
    var tag;
    var input_form = document.getElementsByTagName('form');
    for(var i = 0, max = input_form[0].length;i<max;i++ ){
        tag = input_form[0][i].id;
        testObjet[tag] =  input_form[0][i].value;
    }

    console.log(testObjet);
    if(testObjet.nom ==='Bob'){
        console.log("youpie");
        document.querySelector('#teston').innerHTML = '<p>ceci est un test<p>';
    }
    return false;
}
