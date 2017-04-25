<?php
use Crearchitex\Controller\FrontController;

//require_once dirname(__FILE__).'/../vendor/autoload.php';


 $controller = new FrontController();
 $response = $controller->processRequest();

echo $response;