function Article(titre, contenu, redacteur, motscles, categ){
    this.titre = titre;
    this.contenu = contenu;
    this.dateCrea = new Date();
    this.dateModif =null;
    this.motsCles = [];
    this.categories = [];
    this.redacteur = redacteur;
    this.commentaires = [];
    this.votesPos = 0;
    this.votesNeg = 0;
    this.visible = true;
    
    if (categ !== undefined){
        this.categories = categ;
    }
    if (motscles !== undefined){
        this.motsCles = motscles;
    }
    
    this.addComment = function(contenu, redacteur){
        this.commentaires.push(new Commentaire(contenu, redacteur));
    };
    
    this.modification = function(attribut, contenu){
        if(attribut !== 'votesPos' && attribut !== 'votesNeg' && attribut !== 'commentaires'){
            this[attribut]= contenu;
        }
        this.dateModif = new Date();
    };
}


