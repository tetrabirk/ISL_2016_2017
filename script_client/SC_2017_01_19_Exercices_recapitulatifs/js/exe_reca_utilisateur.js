
function Utilisateur(nom,prenom,email,login,motdepasse)
{
    this.nom = nom.toUpperCase();
    this.prenom = (prenom.slice(0,1).toUpperCase())+(prenom.slice(1).toLowerCase());
    this.email = email;
    this.login = login;
    this.motdepasse = motdepasse;

    this.getInfos= function(){
        var info=[];
        info.login = this.login;
        info.nom = this.nom;
        info.prenom = this.prenom;
        info.email = this.email;
        info.articles= Blog.ArticlesFromUser(this.login);
        info.commentaires=Blog.CommentsFromUser(this.login);
        return info;
        
    };
};

