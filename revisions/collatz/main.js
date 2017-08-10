/**
 * Created by Ludovic on 10/08/2017.
 */

var start = 5;
var log = '';
var collection =[];

function collatz(n){
    if (n%2 ===0){
        return n/2;
    }else{
        return (n*3)+1;
    }
}

function logg(n){
    if (include(collection,n)){
        return ' '+n;
    }else{
        return ' *'+n+'*';
    }
}

function colloop(n){
    log += logg(n);
    addToCol(n);
    while (n!==1){

        var col = collatz(n);

        log += logg(col);
        addToCol(col);
        n = col;
    }
    console.log(log);
    log = '';
}

function include(arr,obj){
    return (arr.indexOf(obj) != -1);
}

function addToCol(n){
    if (include(collection,n)){
    }else{
        collection.push(n);
    }
    collection.sort(function(a,b){
        return a-b;
    });

}



for(i=1; i<100; i++){
    colloop(i);
}

console.log(collection);