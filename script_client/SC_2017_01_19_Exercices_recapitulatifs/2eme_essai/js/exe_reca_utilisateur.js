
function Utilisateur(nom,prenom,email,login,motdepasse)
{
    this.nom = nom.toUpperCase();
    this.prenom = (prenom.slice(0,1).toUpperCase())+(prenom.slice(1).toLowerCase());
    this.email = email;
    this.login = login;
    this.motdepasse = motdepasse;

    this.getInfos = function(){
        var infos = [];
        infos['login']= this.login;
        infos['nom']= this.nom;
        infos['prenom']= this.prenom;
        infos['email']= this.email;
        infos['articles']= Blog.articlesFromUser(this.login);
        infos['commentaires']= Blog.prototype.articlesFromUser('birk');
        infos['points']= Blog.prototype.pointsFromUser(this.login);
        
        return infos;
    };

};

