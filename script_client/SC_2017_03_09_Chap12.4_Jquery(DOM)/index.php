<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <form id='actions'>
            <input type="radio" name="action" id="r_delete" value="delete">Delete
            <input type="radio" name="action" id="r_add" value="add">Add
            <input type="radio" name="action" id="r_move" value="move">Move
        </form>
            
        <table>
            
            <tr>
                <th id="top-left"></th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
            </tr>
            <tr>
                <th>1</th>
                <td>A1</td>
                <td>B1</td>
                <td>C1</td>
            </tr>
            <tr>
                <th>2</th>
                <td>A2</td>
                <td>B2</td>
                <td>C2</td>
            </tr>
            <tr>
                <th>3</th>
                <td>A3</td>
                <td>B3</td>
                <td>C3</td>
            </tr>
        </table>
        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/exe2.js" type="text/javascript"></script>
    </body>
</html>
