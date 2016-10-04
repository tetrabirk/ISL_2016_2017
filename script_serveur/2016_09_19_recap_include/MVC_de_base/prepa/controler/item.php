<?php
// controler home qui contiendra (via include) les fonctions nécessaires au fonctionnement
// de ce module, les récupérations d'information ainsi que les traitements nécessaires
// 
// !!! ATTENTION, AUCUN AFFICHAGE AU SEIN DE CE FICHIER !!!
//
include_once("lib/item.php");



$get_id = isset($_GET["id"]) ? ($_GET["id"]) : "1";

$result=getItem($get_id);

$view_file="item";



?>