<?php

namespace App;
class Calculatrice{

    //fonction addition
    public function add($a, $b){
        return $a + $b;
    }
    //fonction subtraction
    public function subtract($a, $b){
        return  $a - $b;
    }
    //fonction multiplication
    public function mul($a, $b){
        return $a * $b;
    }
    // fonction division
    public function div($a, $b) {
        if ($b == 0) {
         return"Division par zéro impossible";
        }
        return $a / $b;
      }
    
}