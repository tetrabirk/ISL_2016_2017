var blog = new Blog("Mon blog de test");

blog.ajouteUtilisateur('nom1', 'prenom1', 'test1@test.com', 'login1', 'password1');
blog.ajouteUtilisateur('nom2', 'prenom2', 'test2@test.com', 'login2', 'password2');
blog.ajouteUtilisateur('nom3', 'prenom3', 'test3@test.com', 'login3', 'password3');

for (var i = 0; i < blog.getNbUtilisateurs(); i++) {
    console.log(blog.utilisateurs[i].toString());
}

blog.ajouteArticle('Article 1', 'Le contenu de l\'article 1', blog.utilisateurs[0], ['js'], ['test', 'examen']);
blog.ajouteArticle('Article 2', 'Le contenu de l\'article 2', blog.utilisateurs[1], ['mysql'], ['test', 'examen']);
blog.ajouteArticle('Article 3', 'Le contenu de l\'article 3', blog.utilisateurs[0], ['js', 'mysql'], ['test', 'examen']);
blog.ajouteArticle('Article 4', 'Le contenu de l\'article 4', blog.utilisateurs[2], ['php'], ['test', 'examen']);
blog.ajouteArticle('Article 5', 'Le contenu de l\'article 5', blog.utilisateurs[0], ['js', 'php'], ['test', 'examen']);
blog.ajouteArticle('Article 6', 'Le contenu de l\'article 6', blog.utilisateurs[2], ['mysql'], ['test', 'examen']);

for (var i = 0; i < blog.getNbArticles(); i++) {
    console.log(blog.articles[i].toString());
}

blog.articles[1].like();
blog.articles[1].like();
blog.articles[1].like();
blog.articles[1].like();
blog.articles[1].dislike();
blog.articles[2].like();
blog.articles[2].like();
blog.articles[2].dislike();

blog.articles[1].addKeyword(["AMA"]);
blog.articles[1].addComment("Mon premier commentaire", blog.utilisateurs[1]);

console.log(blog.getArticlesPlusPopulaires());