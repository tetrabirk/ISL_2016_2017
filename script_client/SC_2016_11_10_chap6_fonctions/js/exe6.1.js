//1. Écrire le sous-programme (nPermut) qui permute deux données entières.


function nPermut(nbre1, nbre2) {
    var temp = 0;
    var n1 = nbre1;
    var n2 = nbre2;

    temp = n1;
    n1 = n2;
    n2 = temp;

    return n1 + "," + n2;
}
//2. Écrire le sous - programme (nMax) qui calcule la plus grande de deux données
//        entières.

function nMax(nbre1, nbre2) {
    var n1 = nbre1;
    var n2 = nbre2;
    if (n1 > n2) {
        return n1;
    } else {
        return n2;
    }

}
//3. Écrire le sous-programme (nMin) qui calcule la plus petite de deux données
//entières.
function nMin(nbre1, nbre2) {
    var n1 = nbre1;
    var n2 = nbre2;
    if (n1 < n2) {
        return n1;
    } else {
        return n2;
    }

}


//4. Écrire le sous-programme (lireNote) qui lit au clavier un nombre entier qui doit être
//compris entre –1 et 20. La procédure ou fonction recommence la lecture jusqu’à ce
//que l’entier entré soit correct.

function lireNote() {
    do {
        var n = parseInt(prompt("nombre entre -1 et 20?"));
    } while (n < -1 || n > 20 || Number.isInteger(n) === false);

    return n;
}



//5. Même question que 4, mais le sous-programme pose la question 3 fois au plus, si
//au bout des trois essais l’entier entré n’est pas correct, le sous-programme met fin
//au programme.

function lireNote2() {
    for (var i = 0, max = 3; i < max; i++) {
        var n = parseInt(prompt("nombre entre -1 et 20?"));
        if (n > -1 && n < 20 && Number.isInteger(n)) {
            return n;

        }
    }
}
//
//function lireNote2() {
//    var cpt=0;
//    do {        
//        var n = parseInt(prompt("nombre entre -1 et 20?"));
//        cpt++;
//    } while (cpt<3&&n < -1 || n > 20 || Number.isInteger(n) === false);
//
//}

lireNote2();