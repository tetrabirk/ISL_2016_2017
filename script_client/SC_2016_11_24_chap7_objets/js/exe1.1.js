//Les objets
//
//1 Élèves
//Vous devez créer un objet-type pour gérer les élèves d'une classe
//En plus des propriétés courantes d'un élève, vous devez ajouter les propriétés permettant
//de stocker les cours suivis ainsi que les points obtenus dans ceux-ci.
//Vous devez également créer les méthodes permettant de manipuler toutes ces propriétés
//avec notamment :
//• ajout d'un cours
//• ajout de points pour les cours
//• calcul de la moyenne pour un cours
//• calcul de la moyenne totale
//Créez un programme de test pour vérifier le bon fonctionnement de votre objet-type.

function Eleve(prenom, nom, dateNaissance){
    this.nom = (nom.trim()).toUpperCase();
    this.prenom= prenom.trim().substr(0,1).toUpperCase()+prenom.trim().substring(1).toLowerCase();
    this.dateNaissance = new Date(dateNaissance);
    this.cours=[];
    this.notes ={};
    
    this.presentEleve=function(){
      return "Elève "+this.prenom+" "+this.nom+", "+this.dateNaissance.toLocaleDateString();
    };
    
    this.addCourse = function(nom_cours){
        if(this.cours.indexOf(nom_cours)===-1){
            this.cours.push(nom_cours);
        }
    };
    
    this.addNote = function(nom_cours,note){
        this.addCourset(nom_cours);
        if(this.notes[nom_cours]===undefined){
            this.notes[nom_cours]=[];
        }
        this.notes[nom_cours].push(note);
    };
    
    this.showAllCourses = function(){
        console.log(this.cours);
    };
    
    this.showAllNotes = function(){
        console.log(this.notes);
    };
    
    this.averageCourse = function(nom_cours){
        var somme=0;
        if(this.notes[nom_cours] !== undefined){
            var nb_notes=this.notes[nom_cours].length;
            for(var i=0;i<nb_notes;i++){
                somme+=notes[nom_cours][i];
            }
            return somme/nb_notes;
        }else{
            console.log("pas de notes pour ce cours");
            return -1;
        }
    };
    this.averageAll = function(){
        var somme =0;
        if(this.notes[index] != null){
            for each(var cours in this.cours){
                somme+= averageCourse(cours);
            }
        }else{
            console.log("pas de notes");
            return -1;
        }
    };
}

Eleve.prototype.afficherNomPrenom= function (){
    console.log(this.nom+' '+this.prenom);  
};

var eleve1 = new Eleve('Bob','Boberson','07/02/1989');

console.log(eleve1.presentEleve());
