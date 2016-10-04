//2.2.2 Calculez le périmètre et l'aire d'un rectangle l'utilisateur donnant la valeur
//de la longueur et de la largeur

var longeur = parseInt(prompt('longeur du rectangle en cm'));
var largeur = parseInt(prompt('largeur du rectangle en cm'));
var perimetre = (2*longeur)+(2*largeur);
var aire = (longeur*largeur);

console.log("pour un rectangle de "+longeur+"x"+largeur+" cm de coté, le périmètre vaudra "+perimetre+"cm, et l'air "+aire+"cm²");