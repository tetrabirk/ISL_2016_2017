//2)Vous devez afficher dans la console l'arborescence de la
//page dom-ex-02.html (voir Moodle)
//
//QUESTION
//je ne comprends pas ce que bernard a fait , c'est quoi ELEMENT_NODE ???
// ca vient d'ou?
// 
// 
// 
//-------------------Le code de bernard----------------------------------
/**
 * 
 * @param {type} tag
 * @param {type} type
 * @param {type} arr
 * @returns {undefined}
 */
//
//function getNodes(tag, type, arr) {
//
//    if (typeof arr === 'undefined') {
//        var arr = [];
//    }
//
//    if (tag.hasChildNodes) {
//
//        var l = tag.childNodes.length;
//
//        for (var i = 0; i < l; i++) {
//
//            if (tag.childNodes.item(i).nodeType === type) {
//
//                arr.push(tag.childNodes.item(i));
//
//                if (tag.childNodes.item(i).hasChildNodes) {
//
//                    getNodes(tag.childNodes.item(i), type, arr);
//                }
//
//            }
//        }
//    }
//    return arr;
//}
//
//var nodes = getNodes(document, Node.ELEMENT_NODE, nodes);
//
//console.log(nodes);


/**
 * 
 * @param {type} tag
 * @param {type} type
 * @param {type} arr
 * @returns {undefined}
 */

function showNodes(tag, type, indent) {

    if (typeof (tag.tagName) != 'undefined') {
        
        console.log(indent + tag.tagName);
    }

    if (tag.hasChildNodes) {

        var l = tag.childNodes.length;

        for (var i = 0; i < l; i++) {

            if (tag.childNodes.item(i).nodeType === type) {

                showNodes(tag.childNodes.item(i), type, '    ' + indent);
            }
        }
    }
}

showNodes(document, Node.ELEMENT_NODE, '');





// 
// 
// 
// 
// 
// 
// 
//Mes tests de codes
//var html = document;
//console.log(html.childNodes);
//
//console.log(html.ELEMENT_NODE);


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