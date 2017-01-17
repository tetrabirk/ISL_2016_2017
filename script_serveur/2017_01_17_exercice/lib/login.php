<?php
function verifLogin($l, $p){
    $l = convert2DB($l);
    $p = convert2DB($p);
    
    $sql = "SELECT admin_id, nom, prenom, level, is_visible 
            FROM admin 
            WHERE login LIKE '$l' 
                AND password LIKE MD5('$p');
        ";
    
    return requeteResultat($sql);
}

function updatePassword($p, $id){
    $id = intval($id);
    $p = convert2DB($p);
    
    $sql = "UPDATE admin 
                SET password = MD5('$p') 
            WHERE admin_id = $id;
        ";
    
    return ExecRequete($sql);
    
}

function formPassword($action, $method){
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\">\n";
        // champ ancien
        $form .= "<label for=\"old\">Ancien mot de passe</label>\n";
        $form .= "<input type=\"password\" id=\"old\" name=\"old\" value=\"\" class=\"u-full-width\" /><br />\n";
        // champ nouveau
        $form .= "<label for=\"new\">Nouveau mot de passe</label>\n";
        $form .= "<input type=\"password\" id=\"new\" name=\"new\" value=\"\" class=\"u-full-width\" /><br />\n";
        // champ confirmation
        $form .= "<label for=\"new\">Confirmation</label>\n";
        $form .= "<input type=\"password\" id=\"confirm\" name=\"confirm\" value=\"\" class=\"u-full-width\" /><br />\n";
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}


?>