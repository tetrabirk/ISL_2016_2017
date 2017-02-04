var Blog = {
    utilisateurs : [],
    articles : []
};

Blog.userExist = function(login){
    for (var user in Blog.utilisateurs){
        if(login.toLowerCase() === user.toLowerCase()){
            return(user);
        }
    }
};

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

Blog.getUsers = function(){
//    if(Blog.utilisateurs.length === undefined){
//        return false;
//    }else{
        return Blog.utilisateurs;    
//    }
};

Blog.titleExist = function(titreR){ //titre Rechercher
    for(var article in Blog.articles){
        var titreE=Blog.articles[article]['titre'];//titreExistant
        if (titreE === titreR){
            return titreE;
        };
    }
};

Blog.articleNbrefromTitle = function(titreR){
    for(var article in Blog.articles){
        var titreE=Blog.articles[article]['titre'];//titreExistant
        if (titreE === titreR){
            return article;
        };
    }
};

Blog.addArticle = function(titre, contenu, redacteur){
    var testtitre = Blog.titleExist(titre)
    if(!testtitre){
        var article = new Article(titre, contenu, redacteur);
        Blog.articles.push(article);
    }else{
        console.log("'"+Blog.testtitre+"' existe déjà");
    }
};  
    
Blog.getArticles = function(){
//    if(Blog.articles.length === undefined){
//        return false;
//    }else{
        return Blog.articles;    
//    }
};

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