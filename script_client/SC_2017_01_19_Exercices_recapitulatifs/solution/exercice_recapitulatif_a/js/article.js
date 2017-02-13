function Article(titre, contenu, redacteur, categories, mots_cles) {
    this.titre = titre;
    this.contenu = contenu;
    this.categories = [];
    this.mots_cles = [];
    this.redacteur = redacteur;
    this.createdAt = new Date();
    this.updatedAt = new Date();
    this.votes_positifs = 0;
    this.votes_negatifs = 0;
    this.commentaires = [];

    if (categories !== undefined) {
        this.categories = categories;
    }
    if (mots_cles !== undefined) {
        this.mots_cles = mots_cles;
    }
}

Article.prototype.toString = function () {
    return this.titre + ' écrit par ' + this.redacteur;
};

if (!Article.prototype.like) {
    Article.prototype.like = function () {
        this.votes_positifs++;
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.like');
}

if (!Article.prototype.dislike) {
    Article.prototype.dislike = function () {
        this.votes_negatifs++;
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.dislike');
}

if (!Article.prototype.addComment) {
    Article.prototype.addComment = function (comment, user) {
        this.commentaires.push(new Commentaire(comment, user));
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.addComment');
}

if (!Article.prototype.addCategory) {
    Article.prototype.addCategory = function (category) {
        this.categories = this.categories.concat(category);
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.addCategory');
}

if (!Article.prototype.addKeyword) {
    Article.prototype.addKeyword = function (keyword) {
        this.mots_cles = this.mots_cles.concat(keyword);
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.addKeyword');
}

if (!Article.prototype.getNbCommentaires) {
    Article.prototype.getNbCommentaires = function () {
        return this.commentaires.length;
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.getNbCommentaires');
}

if (!Article.prototype.getPopularite) {
    Article.prototype.getPopularite = function () {
        return (this.votes_positifs - this.votes_negatifs);
    };
} else {
    console.log('Erreur de création de la méthode Article.prototype.getPopularite');
}