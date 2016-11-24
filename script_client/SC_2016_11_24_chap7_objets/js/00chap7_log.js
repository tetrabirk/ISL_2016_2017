var CODES_ERREUR={
  NO_ERROR : 0,
  NEGATIVE_NUMBER:-1
};

function logarithme(nombre) {
    var result = {
        code_erreur: CODES_ERREUR.NO_ERROR,
        message_erreur: '',
        val_retour: -1
    };
    if (nombre < 0) {
        result.code_erreur = CODES_ERREUR.NEGATIVE_NUMBER;
        result.message_erreur = "le logarithme d'un nombre négatif est impossible";
        result.val_retour = 'ERREUR';
    } else {
        result.val_retour = Math.log(nombre);
    }
    return result;
}
var nbre = parseInt(prompt("nombre à calculer?"));
retour = logarithme(nbre);

if (retour.code_erreur === CODES_ERREUR.NO_ERROR) {
    console.log("le log de " + nbre + " = " + retour.val_retour);
} else {

    console.log(retour.message_erreur);
}

  