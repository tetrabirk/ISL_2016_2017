function Blog(titre) {
    this.titre = titre;
    this.utilisateurs = [];
    this.articles = [];
}

if (!Blog.prototype.like) {
    Blog.prototype.getNbUtilisateurs = function () {
        return this.utilisateurs.length;
    };
} else {
    console.log('Erreur de création de la méthode Blog.prototype.getNbUtilisateurs');
}

if (!Blog.prototype.getNbArticles) {
    Blog.prototype.getNbArticles = function () {
        return this.articles.length;
    };
} else {
    console.log('Erreur de création de la méthode Blog.prototype.getNbArticles');
}

if (!Blog.prototype.getArticlesPlusPopulaires) {
    Blog.prototype.getArticlesPlusPopulaires = function () {
        if (this.getNbArticles() > 0) {
            var nb_votes = -1;
            var plusPopulaire = [];
            for (var i = 0; i < this.getNbArticles(); i++) {
                if (this.articles[i].getPopularite() > nb_votes) {
                    plusPopulaire = [this.articles[i]];
                    nb_votes = this.articles[i].getPopularite();
                } else if (this.articles[i].getPopularite() === nb_votes) {
                    plusPopulaire.push(this.articles[i]);
                }
            }
            return plusPopulaire;
        } else {
            console.log('Aucun article trouvé');
            return null;
        }
    };
} else {
    console.log('Erreur de création de la méthode Blog.prototype.getArticlesPlusPopulaires');
}

if (!Blog.prototype.getArticlesPlusCommentes) {
    Blog.prototype.getArticlesPlusCommentes = function () {
        if (this.getNbArticles() > 0) {
            var nb_commentaires = -1;
            var plusCommente = [];
            for (var a in this.articles) {
                if (a.getNbCommentaires() > nb_commentaires) {
                    plusCommente = [a];
                    nb_commentaires = a.getNbCommentaires();
                } else if (a.getNbCommentaires() === nb_commentaires) {
                    plusCommente.push(a);
                }
            }
            return plusCommente;
        } else {
            console.log('Aucun article trouvé');
            return null;
        }
    };
} else {
    console.log('Erreur de création de la méthode Blog.prototype.getArticlesPlusCommentes');
}

if (!Blog.prototype.ajouteUtilisateur) {
    Blog.prototype.ajouteUtilisateur = function (nom, prenom, email, login, password) {
        this.utilisateurs.push(new Utilisateur(nom, prenom, email, login, password));
    };
} else {
    console.log('Erreur de création de la méthode Blog.prototype.ajouteUtilisateur');
}

if (!Blog.prototype.ajouteArticle) {
    Blog.prototype.ajouteArticle = function (titre, contenu, redacteur, categories, mots_cles) {
        this.articles.push(new Article(titre, contenu, redacteur, categories, mots_cles));
    };
} else {
    console.log('Erreur de création de la méthode Blog.prototype.ajouteArticle');
}