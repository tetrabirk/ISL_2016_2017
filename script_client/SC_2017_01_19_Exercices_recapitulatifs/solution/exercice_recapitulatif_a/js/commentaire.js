function Commentaire(contenu, redacteur) {
    this.contenu = contenu;
    this.redacteur = redacteur;
    this.createdAt = new Date();
    this.updatedAt = new Date();
    this.votes_positifs = 0;
    this.votes_negatifs = 0;
}

if (!Commentaire.prototype.like) {
    Commentaire.prototype.like = function () {
        this.votes_positifs++;
    };
} else {
    console.log('Erreur de création de la méthode Commentaire.prototype.like');
}

if (!Commentaire.prototype.dislike) {
    Commentaire.prototype.dislike = function () {
        this.votes_negatifs++;
    };
} else {
    console.log('Erreur de création de la méthode Commentaire.prototype.dislike');
}

if (!Commentaire.prototype.getPopularite) {
    Commentaire.prototype.getPopularite = function () {
        return (this.votes_positifs - this.votes_negatifs);
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.getPopularite');
}