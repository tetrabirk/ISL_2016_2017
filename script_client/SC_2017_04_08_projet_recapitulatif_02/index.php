<?php
//include_once 'src/quizz.php';

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main">
            <h1 class="question"></h1>
            <input type="radio" name="reponse" class="reponse" value="1">
            <input type="radio" name="reponse" class="reponse" value="2">
            <input type="radio" name="reponse" class="reponse" value="3">
            <br/>
            <button>précédente</button>
            <button>suivante</button>
            <button>valider</button>
            <button id="test">test</button>
            <p id="result"></p>
        </div>
        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
