var blog = new Blog("Blog_Test");

blog.addUser('ludo','leyens','ludo.leye@gmail.com','birk','secret');
blog.addUser('ludo','leyens','ludo.leye@gmail.com','birc','secret');
blog.addUser('ludo','leyens','ludo.leye@gmail.com','birq','secret');

blog.addUser('ludo','leyens','ludo.leye@gmail.com','birq','secret');

blog.addArticle('Titre1','blablablabla blablablabla blablablabla','birk',['bla','bla bla'],['blabla']);
blog.addArticle('Titre2','blablablabla blablablabla blablablabla','birc',['bla','bla bla'],['blabla']);
blog.addArticle('Titre3','blablablabla blablablabla blablablabla','birq',['bla','bla bla'],['blabla']);
blog.addArticle('Titre4','blablablabla blablablabla blablablabla','birk',['bla','bla bla'],['blabla']);

blog.articles[0].addComment('C est de la merde','birk');
blog.articles[1].addComment('C est de la merde','birc');
blog.articles[2].addComment('C est de la merde','birk');
blog.articles[3].addComment('C est de la merde','birk');
blog.articles[1].addComment('C est de la merde','birc');
blog.articles[2].addComment('C est de la merde','birq');
blog.articles[2].addComment('C est de la merde','birq');
blog.articles[3].addComment('C est de la merde','birk');
blog.articles[3].addComment('C est de la merde','birk');

blog.articles[0].modification('titre','SuperTitre');
blog.articles[1].modification('contenu','Celui qui lit ceci est un âne');

console.log(blog);

console.log(blog.getInfosFromUser('birk'));
