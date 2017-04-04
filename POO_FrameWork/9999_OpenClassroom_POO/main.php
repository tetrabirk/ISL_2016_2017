<?php

function chargerClasse($classe)
{
  require $classe . '.php'; 
}

spl_autoload_register('chargerClasse');

$perso1 = new Personnage(Personnage::FORCE_MOYENNE);
$perso2 = new Personnage(Personnage::FORCE_GRANDE);


Personnage::parler();

//$perso1->frapper($perso2);  // $perso1 frappe $perso2
//$perso1->gagnerExperience(); // $perso1 gagne de l'expérience
//
//$perso2->frapper($perso1);  // $perso2 frappe $perso1
//$perso2->gagnerExperience(); // $perso2 gagne de l'expérience
//
//echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
//echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
//echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';

