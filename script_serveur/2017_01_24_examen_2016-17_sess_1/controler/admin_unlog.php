<!--LEYENS Ludovic 24-01/2017-->
<?php
include_once("lib/login.php");

endAdminLog($_SESSION["admin_log_id"]);
$_SESSION = array();
session_destroy();


$msg = "";

$view_file = "login_form";
?>
