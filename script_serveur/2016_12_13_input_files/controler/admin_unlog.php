<?php
$_SESSION = array();
session_destroy();

// affichage de la vue login_form
include_once("lib/item.php");
$msg = "";
$result_page = getItem(6);
$view_file = "login_form";
?>
