<?php
//A IMPLEMENTER 'use' classe 'erreur'

namespace Crearchitex\Controller;

class FrontController {
    public static $routes = array(
		'home' => 'HomeController',
		'projets' => 'ProjetsController'
	);
    public function  getParametres(){
        $get_page = isset($_GET["p"]) ? $this->sanitize($_GET["p"]) : 'home';
        //A IMPLEMENTER traitement des paramètre qui ne sont pas 'p' 
        
    }
    
    private function sanitize($param){
		return strip_tags(htmlentities($param));
	}
   
    private function recupererClassControler($pageName){
        if( key_exists($pageName, self::$routes)){
            $classControler = __NAMESPACE__."\\".self::$routes[$pageName];
            
            return new $classControler();
        }else{
            //A IMPLEMENTER retour erreur 
        }
    }
    
    public function traitementRequete(){
        $parametre = $this->getParametres();
        
        $controller = $recupererClassControler($parametre['p']);
        // $reponse = $controller-> (à voir dans 'homeController') 
        
    }
    
}