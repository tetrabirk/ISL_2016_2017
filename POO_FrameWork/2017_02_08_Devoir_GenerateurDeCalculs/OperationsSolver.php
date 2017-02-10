<!--LEYENS Ludovic --> 
<?php
//    class OperationSolver{
////        "If eval() is the answer, you're almost certainly asking the wrong question"
////              -- Rasmus Lerdorf, BDFL of PHP
//        
//        public static function solve($string){
//            $result = eval ('return '.$string.';');
//            return $result;
//        }
//        
//    }
    //permet de résoudre les string qu'on lui donne
    class OperationSolver{
        public static function solve($string){
            $op;//opérateur
            $nbre1;
            $nbre2;
            //les regex pour extraire l'opérateur, le 1er nombre et le 2eme nombre
            $regex_op = '/[\-\+\*\/]/';
            $regex_nbr1 = '/[\d]+(?=\s[\+\-\/\*])/';  
            $regex_nbr2 = '/(?<=[\+\-\/\*]\s)[\d]+/'; 
            //j'applique mes regex et stock les résultats
            preg_match($regex_op,$string,$op);
            preg_match($regex_nbr1, $string,$nbre1);
            preg_match($regex_nbr2, $string,$nbre2);

            //je calcul les 2 nombre entre eux, en fonction de l'operateur
            switch($op[0]){
                case ('+') :
                    return $nbre1[0] + $nbre2[0];
                case ('-') :
                    return $nbre1[0] - $nbre2[0];
                case ('/') :
                    return $nbre1[0] / $nbre2[0];
                case ('*') :
                    return $nbre1[0] * $nbre2[0];
            }
        }
        
    }
?>