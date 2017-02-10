<!--LEYENS Ludovic --> 
<?php
    require_once __DIR__.'/OperationsGenerator.php';
    require_once __DIR__.'/OperationsSolver.php';
    
    $generator = new OperationsGenerator();
    
  
//  12 est le nombre d’opérations voulue
    echo 'CALCULS'."<br/><br/>";
    
    $generator->genererOperations(12);
    $operations= $generator->getOperations();
    foreach($operations as $op){
        echo $op." = <br/>";
    }
    echo "<hr/><br/>".'SOLUTIONS'."<br/><br/>";
    
    foreach($operations as $op){
        echo $op." = ".OperationSolver::solve($op)." <br/>";
    }

    
    echo "<hr/><br/>".'TEST ARRAY MAP'."";
    echo "<p>je vois le principe mais pas comment l'utiliser de façon élégante dans ce cas précis<p>";
    
    $soluce = array_map('OperationSolver::solve',$operations);
    
    print_r($soluce);
    
    echo "<br/><br/><br/><br/><hr/><p style='font-size:12px'><i>c'était quoi déjà la règle de bonne pratique sur les balise html dans le php ?</i></p>"
    
    
//    echo $generator->miseEnForme($operations);

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
