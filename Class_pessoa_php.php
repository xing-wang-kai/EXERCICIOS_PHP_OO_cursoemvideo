<?php

class Pessoa{
    var $idade;
    var $nome;
    var $peso;
    var $altura;
    var $comendo;
    var $falando;
    
    
    function comecarfalar(){
        if ($this -> comendo == false && $this -> falando == false){
            echo "começou a FALAR </br>";
            $this -> falando = true;
        } elseif ($this -> comendo == false && $this -> falando == true) {
            echo "já está FALANDO </br>";
            
        } elseif ($this -> comendo == true && $this -> falando == false) {
            echo " está comendo não pode FALAR </br>";
        }
        
    }
    function pararfalar(){
        if ($this -> falando == true && $this -> comendo == false){
            echo " parou de FALAR </br>";
            $this -> falando = false;
        }elseif($this -> falando == false && $this -> comendo = true){
            echo "você não está FALANDO está COMENDO </br>";
        }elseif($this -> falando = false && $this -> comendo = False){
            echo "você não está FALANDO </br>";
        }
        
    }
    function comecarcomer(){
        if ($this -> comendo == false && $this -> falando == false){
            echo "você começou a comer </br>";
            $this -> comendo = true;
        }
        elseif($this -> comendo == true && $this -> falando == false){
            echo "você já está COMENDO </br>";
         
        } elseif ($this -> comendo == false && $this -> falando == true) {
            echo "você não pode COMER está FALANDO </br>";


        }
    }
    function pararcomer(){
        if ($this -> comendo == true && $this -> falando == false){
            echo "Parou de COMER </br>";
            $this -> comendo = true;
        }elseif($this -> comendo == false && $this -> falando == true){
            echo "não está COMENDO esta FALANDO </br>";
        }elseif ($this -> comendo == false && $this -> falando == false){
            echo "não está COMENDO nem FALANDO </br>";
        }
    }
    
    
}
