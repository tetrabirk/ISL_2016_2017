<?php
    ExecRequete($sql)
?>

<form name="item_add" method="post" action="#">
    <label for="menu">Menu</label>
    <input type="text" id="menu" name="menu" size="80">
    <label for="titre">Titre</label>
    <input type="text" id="titre" name="titre" size="80">
    <label for="soustitre">Sous-titre</label>
    <input type="text" id="soustitre" name="soustitre" size="80">
    <label for="description">Description</label>
    <textarea id="description" name="description" cols="82"></textarea><br/>
    <label for="visible">Présent dans le menu </label>
    <input type="radio" name="visible" id="visible" value="oui">oui<br/>
    <input type="radio" name="visible" id="visible" value="non">non<br/>
    
    <input type="submit" id="submit" value="OK">
        
</form>
