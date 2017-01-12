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
        
        <form>
            <label for="pays">PAYS</label>
            <select name="pays" id="pays">
                <?php
                    foreach($pays as $p){
                        echo "<option value='".$p."'>".$p."</option>";
                    }
                ?>
            </select>
            <br/><br/>
            <label for="regions">REGION</label>
            <select name="regions" id="regions">
                <?php
                    foreach($regions as $r){
                        echo "<option value='".$r."'>".$r."</option>";
                    }
                ?>
            </select>
            <br/><br/>
            <label for="communes">COMMUNE</label>
            <select name="communes" id="communes">
                <?php
                    foreach($communes as $c){
                        echo "<option value='".$c."'>".$c."</option>";
                    }
                ?>
            </select>
            <br/><br/>
            <label for="localites">LOCATLITE</label>
            <select name="localites" id="localites">
                <?php
                    foreach($localites as $l){
                        echo "<option value='".$l."'>".$l."</option>";
                    }
                ?>
            </select>
        </form>
        
        
        <script src="js/exe_1.js" type="text/javascript"></script>
    </body>   
</html>
