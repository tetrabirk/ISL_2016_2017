/*
 * Cours
 * Création d'un objet-type pour un cours que vous utiliserez dans
 * l'objet-type Élève.
 */

function Cours(nom) {
    this.nom = nom;
    this.points = [];
}

Cours.prototype.results = {
    erreur: 0,
    message_erreur: "",
    resultat: 0
};

Cours.prototype.ajouterPoints = function (points) {
    this.points.push(points);
};

Cours.prototype.moyenne = function () {
    var somme = 0;
    var nb_points = this.points.length;

    if (nb_points > 0) {
        for (var i = 0; i < nb_points; i++) {
            somme += this.points[i];
        }
        this.results.erreur = 0;
        this.results.message_erreur = "";
        this.results.resultat = somme / nb_points;
    } else {
        this.results.erreur = 1;
        this.results.message_erreur = "Aucun points enregistrés pour le cours " + this.nom;
        this.results.resultat = 0;
    }

    return this.results;
};