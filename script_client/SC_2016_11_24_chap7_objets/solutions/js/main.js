var eleve1 = new Eleve("nom 1", "prénom 1", new Date());

eleve1.ajouterCours("JS");
eleve1.ajouterCours("JS");
eleve1.ajouterCours("PHP");

eleve1.cours["JS"].ajouterPoints(11);
eleve1.cours["JS"].ajouterPoints(15);
eleve1.cours["JS"].ajouterPoints(8);
eleve1.cours["JS"].ajouterPoints(8);
eleve1.cours["PHP"].ajouterPoints(18);
eleve1.cours["PHP"].ajouterPoints(15);

var results = eleve1.cours["JS"].moyenne();
console.log(results);

var results = eleve1.cours["PHP"].moyenne();
console.log(results);

var results = eleve1.moyenneTousLesCours();
console.log(results);