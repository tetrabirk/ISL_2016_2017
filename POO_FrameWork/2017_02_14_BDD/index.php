<!--LEYENS Ludovic -->
<?php
require_once __DIR__.'./src/Vehicule.php';
$exception ="";
try{
    $connex = new PDO('mysql:host=localhost;dbname=poo_php','root','');
}catch(\PDOException $exception){
    //une erreur s'est produite
    echo 'catastrophe! '. $exception->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO & FRAMEWORK INTRO</title>
    </head>
    <body>

    </body>
</html>
