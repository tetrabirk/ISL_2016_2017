//G2. Soit u un tableau à une dimension d'entiers initialisé à sa déclaration. Écrire un
//algorithme qui transfère les éléments de u dans un tableau v suivant le principe
//suivant : les éléments de rang impair de u sont rangés dans v en ordre inverse en
//commençant par la fin de v, et les éléments de rang pair de u sont rangés dans v
//dans le même ordre en commençant par le début de v. L'algorithme commencera
//par afficher le tableau u. Exemple : u = [-1, 2, 7, 1, 3, 1, -2] et v = [2, 1, 1, -2, 3, 7,
//-1]. Écrire au moins deux versions de l'algorithme, l'une parcourant le tableau deux
//fois, l'autre ne le parcourant qu'une seule fois.

var u=[-5,-65,-32,1,0,58,46,12,2,-8,5,-7,9,0,11,-45,-33];
var v=[];
console.log(""+u);
for (var i = 0, max = u.length ; i < max; i++) {
    n=u[i];
    if(i%2===0){
       v.push(n);
   }
}
for (var i = 0, max = u.length ; i < max; i++) {
    n=u[i];
    if(i%2!==0){
       v.push(n);
   }
}
console.log(v);