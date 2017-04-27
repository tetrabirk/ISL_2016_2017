function Message(){
        this.texte = { 
            manquante: 'Veuillez répondre à cette question',
            bravo : 'Bonne réponse!',
            faux : 'Mauvaise réponse!'
        };
        this.style = {
            green : "$('#main').css('background-color','').css('border-color','')",
            red : "$('#main').css('background-color','lightpink').css('border-color','red')"
        };
    }