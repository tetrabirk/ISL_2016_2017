<?php
class Adresse{
    private $rue;
    private $numero;
    private $cp;
    private $ville;

    public function setAdresse($r,$n,$cp,$v){
        $this->rue = $r;
        $this->numero=$n;
        $this->cp=$cp;
        $this->ville=$v;


    }
    public function getAdresse(){
        $r=$this->rue;
        $n=$this->numero;
        $cp=$this->cp;
        $v=$this->ville;
        return $r.' '.$n.', '.$cp.' '.$v;
    }

}
