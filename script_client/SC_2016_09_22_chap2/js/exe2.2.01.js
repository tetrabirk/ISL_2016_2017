//2.2.1 Calculez le périmètre et l'aire d'un carré l'utilisateur donnant la valeur du
//côté

var cote = parseInt(prompt('longeur du cote en cm?'));
var perimetre = (cote * 4);
var aire = (cote * cote);

console.log("pour un carré de "+cote+" cm de coté, le périmètre vaudra "+perimetre+"cm, et l'air "+aire+"cm²");