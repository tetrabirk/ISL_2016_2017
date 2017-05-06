<?php

include_once __DIR__.'/../config/config.php';

include_once __DIR__.'/../src/controller/FrontController.php';
include_once __DIR__.'/../src/controller/HomeController.php';
include_once __DIR__.'/../src/controller/AbstractController.php';


include_once __DIR__.'/../src/view/AbstractView.php';
include_once __DIR__.'/../src/view/SimpleView.php';
use MVC_POO\FrontController;


$controller = new FrontController();

$reponse = $controller->get_render();

echo $reponse;