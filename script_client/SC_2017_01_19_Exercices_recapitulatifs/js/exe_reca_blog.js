var Blog = {
    utilisateurs : [],
    articles : []
};



Blog.addUser = function(nom,prenom,email,login,motdepasse){
////    if(){
////        console.log('Utilisateur -'+login+'- existe déjà');
////        return;
//    }
    
    var user = new Utilisateur(nom,prenom,email,login,motdepasse);
    this.utilisateurs.push(user);
    return user;
};

Blog.getUser = function(){
  
};

    
//Blog.addArticle = function(titre,contenu,redacteur){
//    if(Blog.articles.indexOf('titre')===-1){
//        Blog.cours_suivis.push('titre');
//    }
//};
