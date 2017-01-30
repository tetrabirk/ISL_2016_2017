<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <script src="js/exe9.1.2 PF.js" type="text/javascript"></script>
        
        <!--prototype????-->
        <code>//pourquoi ceci fonctionne
            var Blog = {
                utilisateurs: [],
                articles: []   

            };

            Blog.banane= 'test';

            Blog.addUser = function(nom,prenom,email,login,motdepasse){
                    if(Blog.utilisateurs.indexOf(login)===-1){
                        Blog.utilisateurs.push(login);
                    }
                };
    
        </code>
        <code>//et ceci pas
            var Blog = {
                utilisateurs: [],
                articles: []   

            };

            Blog.banane= 'test';

            Blog.prototype.addUser = function(nom,prenom,email,login,motdepasse){
                    if(Blog.utilisateurs.indexOf(login)===-1){
                        Blog.utilisateurs.push(login);
                    }
                };
    
        </code>
        
    </body>
</html>
