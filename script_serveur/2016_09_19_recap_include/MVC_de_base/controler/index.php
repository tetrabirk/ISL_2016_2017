<?php
// controler home qui contiendra (via include) les fonctions nécessaires au fonctionnement
// de ce module, les récupérations d'information ainsi que les traitements nécessaires
// 
// !!! ATTENTION, AUCUN AFFICHAGE AU SEIN DE CE FICHIER !!!
//
include_once("lib/item.php");

$result_page=getItem(1);
$$result_menu=getItem(0);

$view_file="item";



?>