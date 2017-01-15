//2)Vous devez afficher dans la console l'arborescence de la
//page dom-ex-02.html (voir Moodle)
//

var html = document;
console.log(html.childNodes);

console.log(html.ELEMENT_NODE);


//function adesenfants(array){
//    var currentnode;
//    if (array.hasChildNodes){
//        currentparent=array.firstChild;
//        console.log(currentparent.nodeName);
//        if((array.childNodes.length) > 1){
//            currentchild =currentparent.nextSibling;
//            console.log(currentchild.nodeName);
//            
//            adesenfants(currentchild);
//        }
//    }
//}
//
//adesenfants(html);