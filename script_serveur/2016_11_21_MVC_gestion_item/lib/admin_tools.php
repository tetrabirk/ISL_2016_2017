<?php
function editpassword($admin_id,$npassword){
    $sql = "UPDATE admin 
                SET password            = MD5('".$npassword."')                   
            WHERE admin_id = $admin_id;
        ";
   
    return ExecRequete($sql);


    
}

function getuser($admin_id){
    if(!is_numeric($admin_id)){
        return false;
    }
    if($admin_id>0){
        $sql =  "SELECT admin_id, login, password, nom, prenom, diplome, parcours, level, is_visible 
                FROM admin 
                WHERE admin_id = $admin_id;
                
                ";
        return requeteResultat($sql);
    }else{
        $sql =  "SELECT admin_id, login, password, nom, prenom, diplome, parcours, level, is_visible 
                FROM admin 
                ORDER BY is_visible DESC, admin_id ASC
                ";
        return requeteResultat($sql);
    
    }
   
}

function formUser($data, $action, $method){
    // extraction des données hors du tableau data et association à des variables
    // -> plus de facilité pour appel dans les values
    $nom        = $data["nom"];
    $prenom     = $data["prenom"];
    $diplome    = $data["diplome"];
    $parcours   = $data["parcours"];
    $level      = $data["level"];
    $login      = $data["login"];
    $password   = isset($data["password"]) ? $data["password"] : "";   
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\" enctype ='multipart/form-data'>\n";
        // champ nom
        $form .= "<label for=\"nom\">Nom</label>\n";
        $form .= "<input type=\"text\" id=\"nom\" name=\"nom\" value=\"".$nom."\" class=\"u-full-width\" /><br />\n";
        // champ prenom
        $form .= "<label for=\"prenom\">Prénom</label>\n";
        $form .= "<input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"".$prenom."\" class=\"u-full-width\" /><br />\n";
        // champ diplôme
        $form .= "<label for=\"diplome\">Diplôme</label>\n";
        $form .= "<input type=\"text\" id=\"diplome\" name=\"diplome\" value=\"".$diplome."\" class=\"u-full-width\" /><br />\n";
        // champ parcours
        $form .= "<label for=\"parcours\">Parcours</label>\n";
        $form .= "<textarea id=\"parcours\" name=\"parcours\" class=\"u-full-width\">".$parcours."</textarea><br />\n";
        // champ level
        if($level == "1"){
            $check_1 = " checked='checked\'";
            $check_2 = "";
        }else{
            $check_2 = " checked='checked\'";
            $check_1 = "";
        }
        $form .= "<label for=\"level\">Niveau d'autorisation</label>\n";
        $form .= "<input type=\"radio\" id=\"level\" name=\"level\" value=\"1\"".$check_1." /> Super administrateur<br />\n";
        $form .= "<input type=\"radio\" id=\"level\" name=\"level\" value=\"2\"".$check_2." /> Administrateur<br />\n";
        // champ login
        $form .= "<label for=\"login\">Login</label>\n";
        $form .= "<input type=\"text\" id=\"login\" name=\"login\" value=\"".$login."\" class=\"u-full-width\" /><br />\n";
        // champ password
        $form .= "<label for=\"password\">Mot de passe</label>\n";
        $form .= "<input type=\"password\" id=\"password\" name=\"password\" value=\"".$password."\" class=\"u-full-width\" /><br />\n";
        // champ photo
        $form .= "<label for=\"photo\">Photo</label>\n";
        $form .= "<input type=\"file\" id=\"file\" name=\"photo\" class=\"u-full-width\" /><br />\n";
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}

function insertUser($data){
    $nom        = $data["nom"];
    $prenom     = $data["prenom"];
    $diplome    = $data["diplome"]; 
    $parcours   = $data["parcours"];
    $level      = $data["level"];
    $login      = $data["login"];
    $password   = $data["password"];
    
    $sql = "INSERT INTO admin 
                (login, password, nom, prenom, diplome, parcours, level)
            VALUES 
                ('$login', '".md5($password)."', '$nom', '$prenom', '$diplome', '$parcours', '$level');
        ";
    
    return ExecRequete($sql);
}

function updateUser($data, $id){
    $nom        = $data["nom"];
    $prenom     = $data["prenom"];
    $diplome    = $data["diplome"]; 
    $parcours   = $data["parcours"];
    $level      = $data["level"];
    $login      = $data["login"];
    $password   = isset($data["password"]) ? $data["password"] : "";
    
    $sql = "UPDATE admin 
                SET login   ='$login',
        ";
    
    
if (empty($data["password"])){
    $sql .= " password='".md5($password)."',";
        
}
    $sql .="        nom     ='$nom',
                    prenom  ='$prenom',
                    diplome ='$diplome',
                    parcours='$parcours',
                    level   ='$level'
                WHERE admin_id = $id
        ";
    
    
    return ExecRequete($sql);
}

function user_visibility($action, $id){
    $sql = "";
    $sql .= "UPDATE admin ";
    if($action=="show"){
        $sql .=" SET is_visible = '1' ";
    }else{
        $sql .=" SET is_visible = '0' ";
    }
    $sql.= "WHERE admin_id = $id";
    
    return ExecRequete($sql);
}

function user_delete($id){
    $sql ="";
    $sql .="DELETE FROM admin
            WHERE admin_id = $id";
//ajouet drop machin machin + TEST de level admin
    
    return ExecRequete($sql);

}


?>
