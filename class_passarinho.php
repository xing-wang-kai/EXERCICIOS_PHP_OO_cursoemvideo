<?php

class Passarinho{
    var $nome;
    var $especimie;
    var $cor;
    var $canto;
    var $comer;
    
    function comecarcantar(){
        if ($this -> canto == false && $this -> comer == false){
            echo "O passarinho está CANTANDO</br>";
            $this -> canto = true;
        }elseif ($this -> canto == true && $this -> comer == false){
            echo "O passarinho já está CANTANDO</br>";
        }elseif ($this -> canto == false && $this -> comer == true){
            echo "O passarinho está COMENDO não pode CANTAR</br>";
        }
    }
    
    function pararcantar(){
        if ($this -> canto == true && $this -> comer == false){
            echo "O passarinho parou de CANTAR</br>";
            $this -> canto = false;
        } elseif ($this -> canto == false && $this -> comer == true){
            echo "O passarinho não está CANTANDO, está COMENDO</br>";
        } elseif ($this -> canto == false && $this -> comer == false){
            echo "O passarinho não está CANTANDO</br>";
        }
    }
    function comecarcomer(){
        if ($this -> canto == false && $this -> comer == false){
            echo "O passarinho começou a COMER</br>";
            $this -> comer = true;
        }elseif ($this -> canto == true && $this -> comer == false) {
            echo "O passarinho não pode COMER ele está CANTANDO</br>";
        }elseif ($this -> canto == false && $this -> comer == true ){
            echo "O passarinho já está COMENDO</br>";
        }
        }
    
    function pararcomer(){
        if ($this -> canto == false && $this -> comer == false){
            echo "O passarinho não está COMENDO</br>";
        }elseif ($this -> canto == true && $this -> comer == false){
            echo "O passarinho não esta COMENDO está CANTANDO</br>";
        }elseif ($this -> canto == false && $this -> comer == true){
            echo "O passarinho padou de COMER</br>";
            $this -> comer = false;
        }
    }
}
