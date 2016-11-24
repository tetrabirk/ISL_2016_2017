var objet1={
    key1:'rouge',
    key2:'banane'
};
var i;
objet1.key3 = 'camion';
objet1['key4'] = 'TREIZE';
objet1['key5'] = 'saucisse';

for (i=0;i<5;i++){
    objet1['cle'+i]='ZUG'+(i*2);
}
for (i=5;i<10;i++){
    
    objet1['key'+i]=objet1['cle'+(i-5)]+' REX';
}

console.log(objet1);