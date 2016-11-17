//F1. (recherche dichotomique) Comme le E1 mais les éléments du tableau sont triés
//en ordre croissant.

var trouve = false;
var tab=[1,12,23,34,45,56,67,78,89,93];         //tableau
var max= tab.length;                            //longueur du tableau
var nbre=parseInt(prompt("kèss tu cherch' ?")); //nbre recherché
var vd = 0;                                     //valeur debut;
var vf = max;                                   //valeur fin;
var vm;                                         //valeur milieu;
   

while(!trouve && (vf-vd>1)){
    console.log("("+vd+"+"+vf+")/2 =>");
    vm=parseInt((vd+vf)/2);
    if(nbre === tab[vm]){
        trouve = true;
        break;
    }else if(nbre<tab[vm]){
        vf=vm;
        console.log(vm+" < "+tab[vm]);
    }else{
        vd=vm;
        console.log(vm+" >"+tab[vm]);
    }
}
if(trouve){
    console.log(nbre+" se trouve à la position "+vm );
}else{
    console.log(nbre+" n'est pas dans le tableau");
}
