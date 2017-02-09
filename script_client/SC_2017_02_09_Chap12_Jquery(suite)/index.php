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
        <div id="ennonce">
           <h3>3.10. Les formulaires - Exercice</h3>
        <ul>
            <li>
                Créez un formulaire avec les différents types
d'élément et affichez les valeurs de chacun de
ceux-ci (placées dans le fichier HTML) dans la
console
            </li>
            <li>
                Ensuite, initialisez les valeurs de ces éléments
au chargement de la page, via jQuery
            </li>
        </ul> 
        </div>
        <form id="formulaire" >
            <label for="text">input type text</label>
            <input type="text" name="text" id="text">
            <br/>
            <label for="number">input type number</label>
            <input type="number" name="number" id="number">
            <br/>
            <label for="email">input type email</label>
            <input type="email" name="email" id="email">
            <br/>
            <label for="url">input type url</label>
            <input type="url" name="url" id="url">
            <br/>
            <label for="tel">input type tel</label>
            <input type="tel" name="tel" id="tel">
            <br/>
            <label for="date">input type date</label>
            <input type="date" name="date" id="date">
            <br/>
            <label for="color">input type color</label>
            <input type="color" name="color" id="color">
            <br/>
            <label for="range">input type range</label>
            <input type="range" name="range" id="range">
            <br/>
            <label for="hidden">input type hidden</label>
            <input type="hidden" name="hidden" id="hidden">
            <br/>
            <label for="file"> input type file</label>
            <input type="file" name="file" id="file">
            <br/>
            <label for="password">input type password</label>
            <input type="password" name="password" id="password">
            <br/>
            <label for="search">input type search</label>
            <input type="search" name="search" id="search">
            <br/>
            <label for="checkbox">input type checkbox</label>
            <input type="checkbox" name="checkbox" id="checkbox" value="1">UN
            <input type="checkbox" name="checkbox" id="checkbox" value="2">DEUX
            <br/>
            <label for="radio">input type radio</label>
            <input type="radio" name="radio" id="radio" value="1">UN
            <input type="radio" name="radio" id="radio" value="2">DEUX
            <br/>
            <label for="textarea">textarea</label>
            <textarea id="textarea" name="textarea"></textarea>
            <br/>
            <label for="select">select</label>
            <select name="select" id="select">
                <option value="1">UN</option>
                <option value="2">DEUX</option>
            </select>
            <br/>
            <label for="datalist">input type text + datalist</label>
            <input list="data" input="text" name="datalist" id="datalist">
            <datalist id="data">
                <option value="1">
                <option value="2">
                <option value="3">
            </datalist>
            <br/>
            
            
            
            
            <input type="button" id="get" value="GET"/>
            <input type="button" id="set" value="SET"/>
            <br/>
            
            
            
            
            
            
        </form>
        
        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/exe1.js" type="text/javascript"></script>
    </body>
</html>
