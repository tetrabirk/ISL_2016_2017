<?php
namespace MVC_POO;

class FrontController{
    public static $routes = array(
		'home' => 'HomeController',
		'about' => 'AboutController',
		'FAQ' => 'FAQController'
	);
    
    public function get_param(){
        $data =[];
        $data['page'] = isset($_GET["page"]) ? $this->sanitize($_GET["page"]) : 'home';
        
        return $data;
        
    }
    
    public function sanitize($string){
        return strip_tags(htmlentities($string));
    }
    
    public function get_classController($data){
        $page = $data['page'];
        
        if (key_exists($page, self::$routes)){
            $classController = __NAMESPACE__."\\".self::$routes[$page];
            return new $classController;
        }else{
            echo '404';
        }
    }
    public function get_render(){
        $data = $this->get_param();
        $class = $this->get_classController($data);
        $class->renderView($data);
    }
}
