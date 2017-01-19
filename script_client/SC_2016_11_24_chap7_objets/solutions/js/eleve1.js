/*
 * Vous devez créer un objet-type pour gérer les élèves d'une classe
 * En plus des propriétés courantes d'un élève, vous devez ajouter les propriétés permettant
 * de stocker les cours suivis ainsi que les points obtenus dans ceux-ci.
 * Vous devez également créer les méthodes permettant de manipuler toutes ces propriétés
 * avec notamment :
 * • ajout d'un cours
 * • ajout de points pour les cours
 * • calcul de la moyenne pour un cours
 * • calcul de la moyenne totale
 * Créez un programme de test pour vérifier le bon fonctionnement de votre objet-type.
 */

function Eleve(nom, prenom, date_naissance) {
    this.nom = nom;
    this.prenom = prenom;
    this.date_naissance = date_naissance;
    this.cours = {};
}


Eleve.prototype.results = {
    erreur: 0,
    message_erreur: "",
    resultat: 0
};

Eleve.prototype.ajouterCours = function (nom_cours) {
    this.cours[nom_cours] = [];
};

Eleve.prototype.ajouterPoints = function (nom_cours, points) {
    this.cours[nom_cours].push(points);
};

Eleve.prototype.moyenneCours = function (nom_cours) {
    if (this.cours[nom_cours] !== undefined) {
        var somme = 0;
        var nb_points = this.cours[nom_cours].length;

        if (nb_points > 0) {
            for (var i = 0; i < nb_points; i++) {
                somme += this.cours[nom_cours][i];
            }
            this.results.erreur = 0;
            this.results.message_erreur = "";
            this.results.resultat = somme / nb_points;
        } else {
            this.results.erreur = 1;
            this.results.message_erreur = "Aucun points enregistrés pour le cours " + nom_cours;
            this.results.resultat = 0;
        }
    } else {
        this.results.erreur = 1;
        this.results.message_erreur = "Le cours " + nom_cours + " n'existe pas";
        this.results.resultat = -1;
    }

    return this.results;
};

Eleve.prototype.moyenneTousLesCours = function () {
    var somme = 0;
    var nb_cours = Object.keys(this.cours).length;
    var nb_points = 0;
    var nb_points_total = 0;

    if (nb_cours === 0) {
        this.results.erreur = 1;
        this.results.message_erreur = "Aucun cours enregistré pour l'élève " + this.nom + " " + this.prenom;
        this.results.resultat = -1;
    } else {
        for (var cle in this.cours) {
            var moyenne = this.moyenneCours(cle);
            if (moyenne.erreur === 0) {
                somme += moyenne.resultat;
                nb_points_total++;
            }            
        }
        this.results.erreur = 0;
        this.results.message_erreur = "";
        this.results.resultat = somme / nb_points_total;
    }

    return this.results;
};