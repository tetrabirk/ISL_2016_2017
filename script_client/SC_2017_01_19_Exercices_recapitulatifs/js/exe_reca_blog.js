var Blog = {
    utilisateurs : [],
    articles : []
};


Blog.addUser = function(nom,prenom,email,login,motdepasse){
//    if(Blog.utilisateurs.testLogin(login)){
        var user = new Utilisateur(nom,prenom,email,login,motdepasse);
        Blog.utilisateurs.push(user);
//    }else{
//        console.log('erreur: ce login existe déjà');
//    }
};
    
//Blog.addArticle = function(titre,contenu,redacteur){
//    if(Blog.articles.indexOf('titre')===-1){
//        Blog.cours_suivis.push('titre');
//    }
//};
