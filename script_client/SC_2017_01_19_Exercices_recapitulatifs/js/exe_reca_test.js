//console log de l'objet Blog
console.log(Blog);

//initialisation de quelques utilisateurs
var birk = Blog.addUser('leyens','ludovic','ludovic.leyens@gmail.com','Birk','password');
var boby = Blog.addUser('robert','boberss','bob.bobberson1@gmail.com','Boby','password');
var anto = Blog.addUser('Tonnus','anthony','anthony.tonnus@gmail.com','Anto','password');
var july = Blog.addUser('Jamesson','julie','julie.jammeson@gmail.com','July','password');

//initiation d'un article
var title_1="Titre1";
var txt_1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed odio neque. Quisque blandit, felis sit amet dictum lobortis, sem ligula sodales libero, in sollicitudin odio massa sed dolor. Maecenas sit amet augue id elit lobortis ullamcorper. Vivamus dapibus mauris eget sapien lacinia, at finibus tortor commodo. Suspendisse potenti. Etiam dignissim id diam dapibus fermentum. Duis pharetra ante ex, ac facilisis elit placerat sit amet. Morbi interdum rutrum risus sed imperdiet. Maecenas scelerisque risus et est sollicitudin facilisis. In laoreet lectus nisi, ut semper justo pretium eget.";

var article1 = Blog.addArticle(title_1,txt_1,'Anto');
//initiation d'un deuxième article
var article2 = Blog.addArticle('Mon Deuxième article',"cet article est beauuucoup plus court",'July');
var artilce3 = Blog.addArticle('TITRE','meilleur article de tt les temps','Birk');
var artilce4 = Blog.addArticle('TITRE4','meilleur article de tt les temps','Birk');
//console log de l'objet Blog
console.log(Blog);

//modification d'un article
Blog.modifArticle('Titre1','Titre2','nouveau texte bcp plus court');

//ajout de commentaire
Blog.addCommentToArticle('Titre2','ceci est un commentaire, ton blog il est nul','boby');
Blog.addCommentToArticle('Titre2','ceci est aussi un commentaire, vive le blog','birk');

Blog.addPointToArticle('Titre2',-2)
Blog.addPointToArticle('Titre2',5)
Blog.addPointToComment('Titre2','0',-7)
Blog.addPointToComment('Titre2','0',4)
//console log de l'objet Blog
console.log(Blog.articles);

console.log(Blog.bestArticle());
console.log(Blog.bestComment(0));

console.log(Blog.utilisateurs['Birk'].getInfos());
console.log(Blog.utilisateurs['Anto'].getInfos());
console.log(Blog.utilisateurs['Boby'].getInfos());

