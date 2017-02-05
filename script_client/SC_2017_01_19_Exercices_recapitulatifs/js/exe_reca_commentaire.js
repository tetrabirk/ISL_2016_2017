function Commentaire(contenu, redacteur){
    this.contenu = contenu;
    this.dateCrea = new Date();
    this.dateModif =null;
    this.redacteur = redacteur;
    this.votesPos = 0;
    this.voteNeg = 0;
    
    
}

