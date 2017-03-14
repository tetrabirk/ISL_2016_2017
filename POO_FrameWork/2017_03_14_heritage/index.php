<?php
require_once '__DIR__./vendor/autoload.php';

//$vehicule = new ISL\Entity\Vehicule("noir");
//

use ISL\Entity\Vehicule;
use ISL\Entity\Voiture;

$vehicule = new Vehicule("noir");
$voiture = new Voiture();

?>

<pre>
    <?=get_class($vehicule);?>
</pre>

<pre>
    <?=get_class($voiture);?>
</pre>