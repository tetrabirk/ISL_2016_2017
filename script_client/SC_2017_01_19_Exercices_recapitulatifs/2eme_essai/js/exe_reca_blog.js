function Blog(titre){
    this.utilisateurs = [];
    this.articles = [];
    this.titre= titre;
    
    
 };
 
Blog.prototype.userExist = function(login){
    for(var user in this.utilisateurs){
        var loginE= this.utilisateurs[user]['login'];//login existant
        if(login === loginE){
            return user;
        }
    }
};
    
Blog.prototype.addUser = function(nom, prenom, email, login, mdp){
    if(!this.userExist(login)){
        this.utilisateurs.push(new Utilisateur(nom, prenom, email, login, mdp));
    }else{
        console.log('le login : '+login+' est déjà pris');
    }
};

Blog.prototype.addArticle = function(titre, contenu, redacteur, motscles, categ){
    this.articles.push(new Article(titre, contenu, redacteur, motscles, categ));
};


