function Article(titre, contenu, redacteur){
    this.titre = titre;
    this.contenu = contenu;
    this.dateCrea = new Date();
    this.dateModif =null;
    this.motsCles = [];
    this.redacteur = redacteur;
    this.commentaires = [];
    this.votesPos = 0;
    this.voteNeg = 0;
    this.visible = true;
    
    this.addCommentaire = function(contenu, redacteur){
        var test = Blog.userExist(redacteur);
        if(test){
            var comment = new Commentaire(contenu, redacteur);
            this.commentaires.push(comment);
        }else{
            console.log("le login "+test+" n'existe pas");
        }
    };
        
}


