<?php

class controle{
    var $cor;
    var $tamanho;
    var $bateria;
    var $ligado;
    
    function ligar(){
        if ($this -> bateria == true && $this -> ligado == true){
            echo "</br>O controle já está LIGADO</br>";
        }elseif($this -> bateria == true && $this -> ligado == false){
            echo "</br>O controle foi LIGADO</br>";
            $this -> ligado = true;
        }elseif ($this -> bateria == false){
            echo "</br>Não pode ligar controle sem BATERIA</br>";
        }
    }
    function desligar(){
        if ($this -> ligado == true){
            echo "</br>O controle foi DESLIGADO</br>";
            $this -> ligado = false;
        }else{
            echo "</br>O controle já está DESLIGADO</br>";
        }
    }
    
}
