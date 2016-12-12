<?php

include_once 'lib/news.php';

$get_action = isset($_GET["action"]) ? $_GET["action"] : "view";

switch ($get_action) {
    case "view" :
        $result_list = getNews(0);
        $view_file = "admin_news_view";
        break;
}