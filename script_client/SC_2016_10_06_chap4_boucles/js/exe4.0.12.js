//12.Affichez un carré formé du caractère *
//• Demandez la hauteur du carré
//• Exemple pour une hauteur de 5 :
//*****
//*****
//*****
//*****
//*****

var n= parseInt(prompt("hauteur?"));
ligne='';

for(h=0;h<n;h++){
    for(l=0;l<n;l++){
        ligne += '+';
        }
    ligne+='\n';   
    
}
console.log(ligne);