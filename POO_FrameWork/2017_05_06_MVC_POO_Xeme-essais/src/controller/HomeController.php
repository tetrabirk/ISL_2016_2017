<?php

namespace MVC_POO;

class HomeController extends \MVC_POO\AbstractController{
   
    public function renderView($data){
        $homeView = new \MVC_POO\SimpleView();
        $homeView->render($data);
    }
    
}