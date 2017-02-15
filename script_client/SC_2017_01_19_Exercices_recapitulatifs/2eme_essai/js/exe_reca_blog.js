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

Blog.prototype.getInfosFromUser= function(user){
        var info=[];
        var key = this.getKeyfromName(user);
        var u = this.utilisateurs[key];
        info.login = u.login;
        info.nom = u.nom;
        info.prenom = u.prenom;
        info.email = u.email;
        info.articles= this.articlesFromUser(u.login);
        info.commentaires=this.commentsFromUser(u.login);
        info.points=this.pointsFromUser(u.login);
        return info;
        
    };

Blog.prototype.articlesFromUser = function(user){
    var articlefromuser =[];
    for(var arti in this.articles){
        var redacteur = this.articles[arti].redacteur;
        if(user === redacteur){
            articlefromuser.push(this.articles[arti]);
        }
    }
    return articlefromuser;
};
Blog.prototype.commentsFromUser = function(user){
    var commentsfromuser =[];
    for(var arti in this.articles){
        for(var comment in this.articles[arti].commentaires)
            var redacteur = this.articles[arti].commentaires[comment].redacteur;
            if(user === redacteur){
                commentsfromuser.push(this.articles[arti].commentaires[comment]);
            }
    }
    return commentsfromuser;

};
Blog.prototype.pointsFromUser = function(){
    
};
Blog.prototype.getKeyfromName = function(login){
    for (var user in this.utilisateurs){
        if(login === this.utilisateurs[user].login){
            return user;
        }
    }
};
