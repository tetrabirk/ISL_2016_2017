<?php
class Formatter{
        public static function formatEleve(Eleve $eleve){
            return sprintf(
                '%s - %s
                <hr />        
                ',
                $eleve->getNomComplet(),
                $eleve->getAdresse()
            );
        }
}
?>
