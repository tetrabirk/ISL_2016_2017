<!--LEYENS Ludovic 24-01/2017-->
<?php
function verifLogin($l, $p){
    $l = convert2DB($l);
    $p = convert2DB($p);
    
    $sql = "SELECT admin_id, nom, prenom, is_visible 
            FROM admin 
            WHERE login LIKE '$l' 
                AND password LIKE MD5('$p');
        ";
    
    return requeteResultat($sql);
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

function newAdminLog($id){
    $sql ="INSERT INTO admin_log
        SET date_in = NOW(),date_out = '0000-00-00 00:00:00',admin_id = $id;

        ";
    return ExecRequete($sql);
}

function endAdminLog($id){
    $sql ="UPDATE admin_log
        SET date_out = NOW()
        WHERE admin_log_id = $id;

        ";
    return ExecRequete($sql);
}

?>