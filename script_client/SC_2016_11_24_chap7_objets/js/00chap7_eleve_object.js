function Eleve(nom,prenom){
    this.nom = nom;
    this.prenom = prenom;
    this.cours_suivis = [];
    this.notes_obtenues={};
    
    this.addCourse = function(nom_cours){
        if(this.cours_suivis.indexOf(nom_cours)===-1){
            this.cours_suivis.push(nom_cours);
        }
    };
    this.addNote = function (nom_cours, note){
        this.addCourse(nom_cours);
        if(this.notes_obtenues[nom_cours]===undefined){
            this.notes_obtenues[nom_cours]=[];
        }
        this.notes_obtenues[nom_cours].push(note);
    
    };
    this.showAllCourses= function(){
        console.log(this.cours_suivis);
    };
    this.showAllNotes = function(){
        console.log(this.notes_obtenues);
    };
    
    this.averageCourse=function(nom_cours){
        var somme=0;
        if(this.notes_obtenues[nom_cours] !== undefined){
            var nb_notes=this.notes_obtenues[nom_cours].length;
            console.log("Il existe des notes pour ce cours");
            for(var i=0; i>nb_notes;i++){
                somme+=this.notes_obtenues[nom_cours][i];
            }
            return somme/nb_notes;
        }else{
            console.log("il n'existe pas de notes pour ce cours");
            return -1;
        }
    };
}