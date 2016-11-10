//G4. Soient u et v deux tableaux à une dimension d'entiers et de même taille. Écrire un
//algorithme qui, à partir des deux tableaux u et v, construit les tableaux tMin et tMax
//vérifiant la propriété suivante : quelle que soit la valeur de l'indice i, tMin[i] est le
//minimum de u[i] et v[i], tMax[i] est le maximum de u[i] et v[i] De plus l'algorithme
//calculera le nombre d'égalités (u[i] = v[i]). Les deux tableaux u et v seront initialisés
//à leur déclaration et affichés avant les résultats.

var u=[1,3,5,6,7,8,4,9,2];
var v=[5,4,3,8,7,2,1,9,6];
var tMin=[];
var tMax=[];
var egal=0;
console.log(u);
console.log(v);
for (var i = 0, max = u.length ; i < max; i++) {
    nu=u[i];
    nv=v[i];
    if(nu>nv){
        tMin.push(nv);
        tMax.push(nu);
    }else if(nu<nv){
        tMin.push(nu);
        tMax.push(nv);
    }else{
        egal++;
    }
}
console.log(tMin);
console.log(tMax);
console.log(egal);