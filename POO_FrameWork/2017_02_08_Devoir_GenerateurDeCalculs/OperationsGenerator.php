<!--LEYENS Ludovic --> 
<?php
    class OperationsGenerator{
        public $operators =["+","-","*","/"]; //operateurs
        private $operations=[]; 
        private $nbreMax = 50;  //valeur maximale des nombres qui apparaitrons dans les calculs
        private $resultMax = 200; //valeur maximale du resultat 
        
        //permet de générer 'n' opérations
        public function genererOperations($nbreOp){
            for($i=0;$i<$nbreOp;$i++){
                //choisir un operateur au hasard dans $operators
                $randKeyOp = array_rand($this->operators);
                $randOp= $this->operators[$randKeyOp];
                //choisir un 1er nbre au hasard
                $randNbre1= $this->getRandomNbre1();

                switch($randOp){//en fonction de l'operateur
                    //j'ajoute le resultat de "ajouterX" à $operations
                    case("+"):
                       array_push($this->operations,$this->ajouterAddition($randNbre1));
                        break;
                    case("-"):
                        array_push($this->operations,$this->ajouterSoustraction($randNbre1));
                        break;
                    case("*"):
                        array_push($this->operations,$this->ajouterMultiplication($randNbre1));
                        break;
                    case("/"):
                        array_push($this->operations,$this->ajouterDivision($randNbre1));
                        break;
                }
            }
        }
        //permet de recuperer l'array $operations
        public function getOperations(){
            return $this->operations;
        }
        //retourne une addition qui commence par 'nbre1'
        private  function ajouterAddition($nbre1){
            //je vérifie que le résultat ne dépassera pas le maximum fixé
            $max = ($this->resultMax)-$nbre1;
            //il se peut que $nbremax soit plus petit que $max dans ce cas je dois encore diminué mon max pour le nbre2
            if($max>$this->nbreMax){
                $max=$this->nbreMax;
            }
            //nbre au hasard 2
            $randNbre2= rand(0,$max);
            
            $op = $nbre1.' + '.$randNbre2;
            return $op;
            
        }
        //retourne une soustraction qui commence par 'nbre1'
        private function ajouterSoustraction($nbre1){
            //je fixe le max pour que le resultat ne soit pas négatif
            $max = $nbre1;
            
            //nbre au hasard 2
            $randNbre2= rand(0,$max);
            
            $op = $nbre1.' - '.$randNbre2;
            return $op;
        }
        //retourne une multiplication qui commence par 'nbre1'
        private function ajouterMultiplication($nbre1){
            //je vérifie que nbre1 est différent de 0 et de 1, dans le cas contraire je génère un nouveau nbre1 au hasard
            while($nbre1 == 0 || $nbre1 == 1){
                $nbre1 = $this->getRandomNbre1();
            }
            //je vérifie que le résultat ne dépassera pas le maximum fixé
            $max = ($this->resultMax)/$nbre1;
            
            //nbre au hasard 2
            $randNbre2= rand(2,$max);
            
            $op = $nbre1.' * '.$randNbre2;
            return $op;
        }
        //retourne une division qui commence par 'nbre1'
        private function ajouterDivision($nbre1){
            //je vérifie que nbre1 n'est pas un nombre premier, dans le cas contraire je génère un nouveau nbre1 au hasard
            while ($this->isPrime($nbre1)){
                $nbre1=$this->getRandomNbre1();
            }
            //je fixe le max pour que le resultat ne soit pas inférieur à 1
            $max = $nbre1;
            
            //je cherche un diviseur de nbre 1 pour nbre2
            $trouve = false;
            while(!$trouve){
                    $randNbre2 = rand(2,$max-1);
                    if($nbre1%$randNbre2==0){
                        $trouve=true;
                    }
            }
            
            $op = $nbre1.' / '.$randNbre2;
            return $op;
  
            
        }
        //retourne un nombre au hasard entre 0 et ;nbreMax
        private function getRandomNbre1(){
            return rand(0,$this->nbreMax);
            
        }
        //permet de vérifier si un nombre est premier ou non
        private function isPrime($nbre){
            $prime =true;
            for($i = 2; $i<$nbre; $i++){
                if($nbre % $i ==0){
                    $prime=false;
                    break;
                }
            }
            return $prime;
        }
        
    }
?>
