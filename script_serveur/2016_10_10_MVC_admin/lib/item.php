<?php
function getItem($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if($id > 0){
        $sql = "SELECT item_id, item_title, item_subtitle, item_description 
                FROM item
                WHERE item_id = $id;
                ";
    }else{
        $sql = "SELECT item_id, item_menu, item_title, item_subtitle, item_description, in_menu, is_visible 
                FROM item 
                ORDER BY order_position ASC;
                ";
    }
    return requeteResultat($sql);
}

//fonction formulaire ajout/edition
function formItem($action,$method,$data){
    $menu       =$data['menu'];
    $titre      =$data['titre'];
    $soustitre  =$data['soustitre'];
    $description=$data['description'];
    
    $form=  "";
    $form.= "<form name='item_add' method='".$method."' action='".$action."'>";
    
    $form.= "<label for='menu'>Menu</label>";
    $form.= "<input type='text' id='menu' name='menu' size='80' value='".$menu."'>";
    
    $form.= "<label for='titre'>Titre</label>";
    $form.= "<input type='text' id='titre' name='titre' size='80' value='".$titre."'>";
    
    $form.= "<label for='soustitre'>Sous-titre</label>";
    $form.= "<input type='text' id='soustitre' name='soustitre' size='80' value='".$soustitre."'>";
    
    $form.= "<label for='description'>Description</label>";
    $form.= "<textarea id='description' name='description' cols='82'>".$description."</textarea><br/>";
    
    $form.= "<label for='visible'>Présent dans le menu </label>";
    $form.= "<input type='radio' name='visible' id='visible' value='oui'>oui<br/>";
    $form.= "<input type='radio' name='visible' id='visible' value='non'>non<br/>";
    
    $form.= "<input type='submit' name='submit' id='submit' value='Envoyer'>";
        
    $form.= "</form>";
    echo $form;
    }

?>