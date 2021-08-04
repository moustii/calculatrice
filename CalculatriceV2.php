<?php

class Calculatrice{
    
    private $_resultat;
    

    public function __construct(){
    }

    public function operation($chiffre1, $symbol, $chiffre2) {
        switch($symbol){
            case "+" :
                echo $chiffre1 . " " . $symbol . " " . $chiffre2 . " = ";
                $this->_resultat =  $chiffre1 + $chiffre2;
                break; 
            case "-" :
                echo $chiffre1 . " " . $symbol . " " . $chiffre2 . " = ";
                $this->_resultat =  $chiffre1 - $chiffre2;
                break; 
            case "*" :
                echo $chiffre1 . " " . $symbol . " " . $chiffre2 . " = ";
                $this->_resultat =  $chiffre1 * $chiffre2;
                break; 
            case "/" :
                echo $chiffre1 . " " . $symbol . " " . $chiffre2 . " = ";
                $this->_resultat =  $chiffre1 / $chiffre2;
                break; 
            default : 
                echo " erreur de saisie, recommence connard";
        }
    }

    public function operationAutreNombre($symbol, $chiffre3){
        switch($symbol){
            case "+" :
                echo $this->_resultat . " " . $symbol . " " . $chiffre3 . " = ";
                $this->_resultat =  $this->_resultat + $chiffre3;
                break; 
            case "-" :
                echo $this->_resultat . " " . $symbol . " " . $chiffre3 . " = ";
                $this->_resultat =  $this->_resultat - $chiffre3;
                break; 
            case "*" :
                echo $this->_resultat . " " . $symbol . " " . $chiffre3 . " = ";
                $this->_resultat =  $this->_resultat * $chiffre3;
                break; 
            case "/" :
                echo $this->_resultat . " " . $symbol . " " . $chiffre3 . " = ";
                $this->_resultat =  $this->_resultat / $chiffre3;
                break; 
            default : 
                echo " erreur de saisie, recommence connard";
        }
    }

    public function getResultat(){
        return $this->_resultat;
    }
}

//main

$calcul = new Calculatrice;
$calcul->operation(5, "+", 5);
echo $calcul->getResultat() . "<br>";
$calcul->operationAutreNombre("*", 10);
echo $calcul->getResultat() . "<br>";
$calcul->operationAutreNombre("*", 10);
echo $calcul->getResultat() . "<br>";
$calcul->operationAutreNombre("*", 2);
echo $calcul->getResultat() . "<br>";








