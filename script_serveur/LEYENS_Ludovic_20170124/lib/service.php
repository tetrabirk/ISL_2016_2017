<!--LEYENS Ludovic 24-01/2017-->

<?php
function getService($id){
    if(!is_numeric($id)){
        return false;
    }
    
    if ($id > 0) {
        $sql = "SELECT service_id, service, explication, description, is_visible 
            FROM service 
            WHERE service_id = $id
            ORDER BY is_visible DESC;
            "; 
    }else{
        $sql = "SELECT service_id, service, explication, description, is_visible 
            FROM service 
            ORDER BY is_visible DESC;
            "; 
    }
    return requeteResultat($sql);
}


function formService($data, $action, $method){
    // extraction des données hors du tableau data et association à des variables
    // -> plus de facilité pour appel dans les values
    $service        = $data["service"];
    $explication    = $data["explication"];
    $description    = $data["description"];
    
    $form = "\n";
    $form .= "<form action=\"".$action."\" method=\"".$method."\">\n";
        // champ service
        $form .= "<label for=\"service\">Service</label>\n";
        $form .= "<input type=\"text\" id=\"service\" name=\"service\" value=\"".$service."\" class=\"u-full-width\" /><br />\n";
        // champ explication
        $form .= "<label for=\"explication\">Explication</label>\n";
        $form .= "<textarea id=\"explication\" name=\"explication\" class=\"u-full-width\">".$explication."</textarea><br />\n";
        // champ description
        $form .= "<label for=\"description\">Description</label>\n";
        $form .= "<textarea id=\"description\" name=\"description\" class=\"u-full-width\">".$description."</textarea><br />\n";
        // bouton submit
        $form .= "<input type=\"submit\" name=\"submit\" value=\"ok\" />\n";
        
    $form .= "</form>\n";
    
    return $form;
}


function updateService($data, $id){
    $service = $data["service"];
    $explication = $data["explication"];
    $description = $data["description"];
    $sql = "UPDATE service
            SET service = '$service',
                explication = '$explication',
                description = '$description'
            WHERE service_id = $id;
            ";
    return ExecRequete($sql);
}

?>