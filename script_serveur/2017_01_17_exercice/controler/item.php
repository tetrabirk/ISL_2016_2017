<?php
// include de la lib item contenant les fonctions nécessaires
include_once("lib/item.php");
include_once("lib/projet.php");
include_once("lib/news.php");

// récupération du paramètre id passé en GET
$get_item_id = isset($_GET["id"]) ? $_GET["id"] : 1;
if(!is_numeric($get_item_id)){
    $get_item_id = 2;
}

// récupération des info pour la construction des menus
$result_menu = getItem(0);

$result_menu_categ = getProjetCategorie(0);

//recup des news

$result_news = getNews(0);

// récupération des infos dans la DB grace à la fonction getItem et stockage
// dans une variable (array)
$result_page = getItem($get_item_id);

// définition de la vue à afficher
$view_file = $get_item_id != 1 ? "item" : "home";
?>