<?php
class Vehicule
{
    private $marque;
    private $modele;
    private $annee;

    public function avance(){
      echo 'vroum <br/>';
    }

    public function setMarque($marque){
      $this->marque = $marque;
    }

    public function getMarque(){
      return $this->marque;
    }
}

$auto0 = new Vehicule();
$auto0->avance();
$auto0->setMarque('Citroen');

$marque = $auto0->getMarque();
echo $marque.'</br>';

var_dump($auto0);

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO et FRAMEWORK INTRO</title>
    </head>
    <body>

    </body>
</html>
