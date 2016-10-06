//Affichez un triangle rectangle formé du caractère *
//• Demandez la hauteur du triangle
//• Exemple pour une hauteur de 5 :
//*
//**
//***
//****
//*****

var n= parseInt(prompt("hauteur?"));
ligne='';

for(i=0;i<n;i++){
    ligne += '+';
    console.log(ligne);
    
}
