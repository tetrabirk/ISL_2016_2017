<?php

namespace Crearchitex\Controller;

use Crearchitex\View\HomeView;
use Crearchitex\Config\pdo;

class HomeController {

    var $view; //A Deplacer dans Abstract
    var $connex = pdo;
    
    
    public function __construct(){
        $this->view = new HomeView();
    }

    public function getView() {
        return $this->view;
    }

    public function setView($view) {
        $this->view = $view;
    }
    
    public function recupererElementsHome($param){
        $title = $param[0]['item_title'];
        $subtitle = $param[0]['item_subtitle'];
        $description = $param[0]['item_description'];
        
        
    }
    
}
