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

    
    echo "<hr/><br/>".'TEST'."<br/><br/>";
    
    $soluce = array_map('OperationSolver::solve',$operations);
    
    print_r($soluce);
    
    
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
