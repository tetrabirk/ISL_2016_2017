<?php
    class OperationSolver{
//        "If eval() is the answer, you're almost certainly asking the wrong question"
//              -- Rasmus Lerdorf, BDFL of PHP
        
        public static function solve($string){
            $result = eval ('return '.$string.';');
            return $result;
        }
        
    }
?>