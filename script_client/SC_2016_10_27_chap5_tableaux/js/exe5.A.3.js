//A3. Écrire un algorithme qui recherche le maximum d'un tableau à une dimension
//d'entiers initialisé à sa déclaration. L'algorithme affichera le tableau avant le
//résultat.

tab = [];
lgtab = parseInt(prompt("longueur du tableau?"));

max=0;

for (i=0;i<lgtab;i++){
    tab[i]=parseInt(prompt("valeur?"));
    if (tab[i]>max){
        max=tab[i];
    }
}
console.log(tab);
console.log(max);

