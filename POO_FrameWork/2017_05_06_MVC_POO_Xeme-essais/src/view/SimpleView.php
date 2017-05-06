<?php

namespace MVC_POO;

class SimpleView extends AbstractView{
    
    protected $nom,$titre,$description;
    
    private $templatename = 'simple.html';
    
    public function render($data){
        
        $tpl = file_get_contents('../src/view/template/'.$this->templatename);
//        str_replace();
        
        return $tpl;
        
    }
    
    
}