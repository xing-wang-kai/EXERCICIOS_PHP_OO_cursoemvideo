<?php
class Televisao{
    var $tamanho;
    var $polegadas;
    var $marca;
    var $ligada;
    var $chanal;
    
    function ligar(){
        if ($this -> ligado == false){
            echo "A TV foi LIGADA</br>";
            $this -> ligado = true;
        }else {
            echo "A TV já esta LIGADA</br>";
        }
    }
    
    
    function desligar(){
        if ($this -> ligado == true){;
            echo "a televisão foi DELIGADA</br>";
            $this -> ligado = false;
        }else{
            echo "a tv já está DESLIGADA</br>";
        }
            
    }
    
    
    function troca_canal(){
        if ($this -> ligado == true){
            echo "O canal foi Trocado</br>";
        }else {
            echo "não é possivel trocar o canal a tv está DESLIGADA</br>";
        }
    }
}
