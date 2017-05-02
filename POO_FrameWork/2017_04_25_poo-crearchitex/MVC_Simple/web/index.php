<?php

$config = include_once __DIR__.'/../config/config.php';

$pageName = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'home';

try{
    $pdo = new \PDO();
}catch(\PDOException $e){
    $reponse = 'error PDO';
}

switch($pageName){
    case 'home':{
        $controller = new HomeController();
        $reponse = $controller->getReponses();
        break;
    }
    case 'projets':{
        $controller = new ProjetsController();
        $reponse = $controller->getReponses();
        break;
    }
    default:{
        $reponse ="<h1>PAS DE CONTROLLER</h1>";
    }
}