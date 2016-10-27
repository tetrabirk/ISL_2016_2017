//A7. Écrire un algorithme qui calcule, dans un tableau à une dimension d'entiers
//initialisé à sa déclaration, le nombre d'entiers positifs, le nombre d'entiers négatifs
//et le nombre de zéros de ce tableau. L'algorithme affichera le tableau avant les
//résultats.

tab = [];
lgtab = parseInt(prompt("longueur du tableau?"));

nbrepos=0;
nbreneg=0;
nbrenul=0;

for (i=0;i<lgtab;i++){
    tab[i]=parseInt(prompt("valeur?"));
    if (tab[i]>0){
        nbrepos++;
    }else if(tab[i]<0){
        nbreneg++;
    }else{
        nbrenul++;
    }
}
console.log(tab);
console.log("positif :"+nbrepos);
console.log("negatif :"+nbreneg);
console.log("nul :"+nbrenul);