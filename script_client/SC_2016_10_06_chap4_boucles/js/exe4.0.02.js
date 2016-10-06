//Écrivez un algorithme affichant les dix premières valeurs de la table de
//multiplication de l'entier compris entre 2 et 20 choisi par l'utilisateur
var nbre;
var result;
do{
    nbre = parseInt(prompt("nombre entre 2 et 20?"));
}while(nbre<2 || nbre>20 || Number.isInteger(nbre)===false );



for (i=1;i<=10;i++){
    result = nbre*i;
    console.log(result);
}