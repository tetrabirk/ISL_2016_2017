<!--LEYENS Ludovic 24-01/2017-->
<?php
include_once("config/protect_admin.php");
include_once("lib/service.php");

// récupération des paramètres passés en GET
$get_action         = isset($_GET["action"]) ? $_GET["action"] : "view";
$get_id             = isset($_GET["id"]) ? $_GET["id"] : 0 ;

// récupération des variables passées en POST
$post_service       = isset($_POST["service"]) ? $_POST["service"] : "";
$post_explication   = isset($_POST["explication"]) ? $_POST["explication"] : "";
$post_description   = isset($_POST["description"]) ? $_POST["description"] : "";
$post_submit        = isset($_POST["submit"]) ? $_POST["submit"] : "";


$msg_end = "";
$msg_error = "";

switch($get_action){
    case "view":
        $result_list    = getService(0);
        $view_file      = "admin_service_view";
        break;
    
    case "update":
        $result_service = getService($get_id)[0];
        if ($post_submit == "ok"){
            if(!empty($post_service)&&!empty($post_explication)){
                $data["service"]=convert2DB(htmlentities_utf8($post_service));
                $data["explication"]=convert2DB(htmlentities_utf8($post_explication));
                $data["description"]=convert2DB(htmlentities_utf8($post_description));
                if(updateService($data, $get_id)){
                    $msg_end.="modification réussie <br/>";
                    $result_list    = getService(0);
                    $view_file      = "admin_service_view";
                    break;
                }else{
                    $msg_error.="une erreur est survenue lors de l'actualisation de la DB <br/>";
                    $view_file      = "admin_service_update";
                    break;
                }
            }else{
                if(empty($post_service)){
                    $msg_error.="le champ 'Service' ne peut pas être vide <br/>";
                }
                if(empty($post_explication)){
                    $msg_error.="le champ 'Explication' ne peut pas être vide br/>";
                }
                $view_file      = "admin_service_update";
                break;
            }
        }else{
            $view_file      = "admin_service_update";
        }
    }
?>