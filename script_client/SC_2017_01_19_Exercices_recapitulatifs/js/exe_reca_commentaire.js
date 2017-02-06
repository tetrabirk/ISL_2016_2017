function Commentaire(contenu, redacteur){
    this.contenu = contenu;
    this.dateCrea = new Date();
    this.dateModif =null;
    this.redacteur = redacteur;
    this.votesPos = 0;
    this.votesNeg = 0;
    
    this.addPoint = function(valeur){
        var val = parseInt(valeur);
        if(!isNaN(val)){
            if(val>0){
                this.votesPos += val;
            }else{
                this.votesNeg += ((-1)*val);
            }
                
        }else{
            console.log("il est impossible d'ajouter '"+valeur+"' votes");
        }
    };
        
    
    
}

