var Blog = {
    utilisateurs : [],
    articles : []
};

//fonction qui vérifie si le login entré existe, retourne le login si il est trouvé, sinon "undefined"
Blog.userExist = function(login){
    for (var user in Blog.utilisateurs){
        if(login.toLowerCase() === user.toLowerCase()){
            return(user);
        }
    }
};

//fonction qui ajoute un objet Utilisateur à l'array Blog.utilisateurs, après avoir tester le login avec la fonction userExist
Blog.addUser = function(nom,prenom,email,login,motdepasse){
    var test = Blog.userExist(login);
    if(!test){
        var user = new Utilisateur(nom,prenom,email,login,motdepasse);
        this.utilisateurs[login] = (user);
        return user;
    }else{
        console.log('le login '+test+' existe deja');
    }
    
    
};

//fonciton qui retourne tt les utilisateurs, et retourne 'false' si il n'y en pas
Blog.getUsers = function(){
    if(Blog.utilisateurs.length === 0){
        return false;
    }else{
        return Blog.utilisateurs;    
    }
};

//fonction qui vérifie si le titre d'article entré existe, retourne le login si il est trouvé, sinon "undefined"
Blog.titleExist = function(titreR){ //titre Rechercher
    for(var article in Blog.articles){
        var titreE=Blog.articles[article]['titre'];//titreExistant
        if (titreE === titreR){
            return titreE;
        };
    }
};

//fonction qui retourne le 'numéro' (la place de l'objet Article dans l'array articles) en fonction du titre entré
Blog.articleNbrefromTitle = function(titreR){
    for(var article in Blog.articles){
        var titreE=Blog.articles[article]['titre'];//titreExistant
        if (titreE === titreR){
            return article;
        };
    }
};

//qui ajoute un objet Article à l'array Blog.utilisateurs, après avoir tester le login avec la fonction titleExist
Blog.addArticle = function(titre, contenu, redacteur){
    var testtitre = Blog.titleExist(titre);
    if(!testtitre){
        var article = new Article(titre, contenu, redacteur);
        Blog.articles.push(article);
    }else{
        console.log("'"+Blog.testtitre+"' existe déjà");
    }
};  

//fonciton qui retourne tt les articles, et retourne 'false' si il n'y en pas

Blog.getArticles = function(){
    if(Blog.articles.length ===0){
        return false;
    }else{
        return Blog.articles;    
    }
};

//fonction qui modifie un article existant, après avoir vérifié si l'article existe et si le nouveau titre (si il y en a un) n'existe pas déjà
Blog.modifArticle = function(ancientitre,nouveautitre,texte){
        var test1 = Blog.titleExist(ancientitre);
        var test2 = Blog.titleExist(nouveautitre);
        var idarticle = Blog.articleNbrefromTitle(ancientitre); 
        if(test1){
            if(test1===test2){ //est ce qu'on change le titre?
                Blog.articles[idarticle].contenu=texte;
                Blog.articles[idarticle].dateModif= new Date();
            }else if(!test2){
                Blog.articles[idarticle].titre=nouveautitre;
                Blog.articles[idarticle].contenu=texte;
                Blog.articles[idarticle].dateModif= new Date();
            }else{
                console.log("le titre '"+test2+"' existe déjà");
            }

        }else{
            console.log("ce titre d'article n'existe pas");
            return;
        }
};

//fonction qui se sert la fonction addCommentaire pour ajouter un article bien précis
Blog.addCommentToArticle = function(titreA,contenu,redacteur){
    var temp= Blog.articleNbrefromTitle(titreA);
    Blog.articles[temp].addCommentaire(contenu,redacteur);
};

Blog.addPointToArticle = function(titreA,valeur){
    var temp= Blog.articleNbrefromTitle(titreA);
    Blog.articles[temp].addPoint(valeur);
};

Blog.addPointToComment = function(titreA,comment,valeur){
    var temp= Blog.articleNbrefromTitle(titreA);
    Blog.articles[temp].commentaires[comment].addPoint(valeur);
};

Blog.bestArticle = function(){
    var best=[];
    best.max= Math.log(0); //-infinity
    for (var article in Blog.articles){
        var points = Blog.articles[article].getPoints();
        if (points>best.max){
            
            best.article = article;
            best.max = points;
        };
    }
    return best;
    
};

Blog.bestComment = function(article){
    var best =[];
    best.max=Math.log(0); //-infinty
    for (var comment in Blog.articles[article].commentaires){
        var points = Blog.articles[article].commentaires[comment].getPoints();
        if (points>best.max){
            
            best.comment = comment;
            best.max = points;
        };
    }
    return best;
};

Blog.ArticlesFromUser = function (user){
    var articles =[];
    for (var article in Blog.articles){
        if(Blog.articles[article].redacteur === user){
            articles.push(Blog.articles[article]);
        }
    }
    return articles;
};

Blog.CommentsFromUser = function (user){
    var comments =[];
    for (var article in Blog.articles){
        for (var comment in Blog.articles[article].commentaires){
            if(Blog.articles[article].commentaires[comment].redacteur === user){
                comments.push(Blog.articles[articles].commentaires);
            }
        }
    }
    return comments;
}
