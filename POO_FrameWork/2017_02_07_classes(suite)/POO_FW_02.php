
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
    public function setAnnee($a){
      if($a<1990){
        throw new Exception("vehicule trop vieux");
      }
      $this->annee = $a;
    }
    public function setModele($modele){
      $this->modele = $modele;
    }
    public function getModele(){
      return $this->modele;
    }
    public function getInfoVehicule(){
      return sprintf('%s %s (%d)',
        $this->marque,
        $this->modele,
        $this->annee
      );
    }
}

$auto0 = new Vehicule();
$auto0->avance();
$auto0->setMarque('Citroen');
$auto0->setAnnee(1999);
echo $auto0->getInfoVehicule();

$marque = $auto0->getMarque();
echo $marque.'</br>';


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
