function Article(titre, contenu, redacteur){
    this.titre = titre;
    this.contenu = contenu;
    this.dateCrea = new Date();
    this.dateModif =null;
    this.motsCles = [];
    this.redacteur = redacteur;
    this.commentaires = {};
    this.votesPos = 0;
    this.voteNeg = 0;
    this.visible = true;
}
var article1 = new Article('boby','blabla','bob');