function Article(titre, contenu, redacteur){
    this.titre = titre;
    this.contenu = contenu;
    this.dateCrea = new Date();
    this.dateModif =null;
    this.motsCles = [];
    this.redacteur = redacteur;
    this.commentaires = [];
    this.votesPos = 0;
    this.votesNeg = 0;
    this.visible = true;
    
    //fonction qui permet d'ajouter un commentaire à un article, après avoir vérifié que l'utilisateur existe
    this.addCommentaire = function(contenu, redacteur){
        var test = Blog.userExist(redacteur);
        if(test){
            var comment = new Commentaire(contenu, redacteur);
            this.commentaires.push(comment);
        }else{
            console.log("le login "+test+" n'existe pas");
        }
    };
    this.addPoint = function(valeur){
        var val = parseInt(valeur);
        if(!isNaN(val)){
            if(val>0){
                this.votesPos += val;
            }else{
                this.votesNeg += ((-1)* (val));
            }
                
        }else{
            console.log("il est impossible d'ajouter '"+valeur+"' votes");
        }
    };
    this.getPoints  = function(){
        var points = (this.votesPos)-(this.votesNeg);
        return points;
    };
        
}


