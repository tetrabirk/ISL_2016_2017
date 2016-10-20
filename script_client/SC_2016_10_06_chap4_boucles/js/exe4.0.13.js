//13.Affichez un triangle isocèle formé du caractère *
//• Demandez la hauteur du triangle
//• Exemple pour une hauteur de 4 :
//   *
//  ***
// *****
//*******

var n= parseInt(prompt("hauteur?"));
var dessin='';

for(i=0;i<n;i++){
    //'b' pour 'blank'
    for(b=0;b<(n-i-1);b++){
        dessin += ' ';
    }
    //'s' pour 'star'
    for(s=0;s<((2*i)+1);s++){
        dessin += '*';
    }
    dessin += '\n';
}
console.log(dessin);

//n=4
//
//l   *   ''  |   *       ''    
//0)  1   3   |(2*i)+1    n-i-1   ...*
//1)  3   2   |(2*1)+1    4-1-1   ..***
//2)  5   1   |(2*2)+1    4-2-1   .*****   
//3)  7   0   |(2*3)+1    4-3-1   *******