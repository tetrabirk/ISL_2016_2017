<?php

namespace Crearchitex\Controller;

use Crearchitex\View\ErrorView;
use Crearchitex\View\SimpleView;

class FrontController {
    public static $routes = array(
        'home' => 'HomeController',
//        'projets' => 'ProjetsController',
    );
    
    public function __construct(){
        
    }
    public function processRequest(){
       $parameters = $this-> filterParameters();
       
       try{
           $controller = $this->retrieveControllerClass ($parameters['pageName']);
           $reponse = $controller->executeAction ($parameters['action'],$parameters['method'],$parameters);
           
       }catch(\Exception $e){
           $v = new ErrorView();
           $v->setErrorCode($e->getCode(), $e->getMessage());
           echo $v->render();
       }
        
    }
    
    private function retrieveControllerClass($pageName){
        if (key_exists($pageName,self::$routes )){
            $controllerClass = __NAMESPACE__."\\".self::$routes[$pageName];
            return new $controllerClass();
            
        }else{
            throw new Exception('page not found', 404);
        }
    }
    private function sanitize($param){
        return strip_tags(htmlentities($param));
        
        //todo : empêchez l'injection de code
    }
    private function filterParameters(){
        $pageName = isset ($_REQUEST['p']) && ! is_null ($_REQUEST['p']) ? $this->sanitize($_REQUEST['p']) : 'home';
        $action = isset ($_REQUEST['action']) && ! is_null ($_REQUEST['action']) ? $this->sanitize($_REQUEST['action']) : 'default';
        $method = $_SERVER['REQUEST_METHOD'];
        $parameters = array();
        foreach($_REQUEST as $key => $val){
            if($key != 'page' && $key != 'action'){
                $parameters[$key]=$this->sanitize($val);
            }
        }
        return array ('method' => $method, 'action' => $action, 'pageName' => $pageName, 'parameters' => $parameters);
    }
}