<?php

require_once './interface_controle.php';
class controle implements funcoes_controle{
    private $volume;
    private $tocando;
    private $ligado;
    
    
 public function __construct(){
     $this -> set_volume(50);
     $this -> set_tocando(false);
     $this -> set_ligado(false);
 }
    
    
 private function get_volume(){
     return $this -> volume;
 }
 private function set_volume($valor){
     $this -> volume = $valor;
     
 }
 
 private function get_tocando(){
     return $this -> tocando;
     
 }
 private function set_tocando($valor){
     $this -> tocando = $valor;
     
 }
 
 private function get_ligado(){
     return $this -> ligado;
     
 }
 private function set_ligado($valor){
     $this -> ligado = $valor;
     
 }

    public function abrirMenu() {
        echo "A televisão está: ".($this -> get_ligado() ? "SIM" : "NÃO")."</br>";
        echo "A televisão está tocando: ".($this -> get_tocando() ? "sim" : "NÃO")."</br>" ;
        echo "volume é: ". $this -> get_volume();
        for ($i = 0; $i <= $this -> get_volume(); $i +=  10){
            echo " |_| ";
        }
        echo "</br>";
    }

    public function desligar() {
        $this -> set_ligado(false);
    }

    public function desligarMudo() {
        if ($this -> get_ligado() && $this -> get_volume() == 0){
            $this -> set_volume(50);
        }
    }

    public function fecharMenu() {
        echo "Fechando menu...";
    }

    public function ligar() {
        $this -> set_ligado(true);
    }

    public function ligarMudo() {
        if ($this -> get_ligado() && $this -> get_volume() >= 0){
            $this -> set_volume(0);
        }
    }

    public function maisVolume() {
        if($this -> get_ligado()){
           $this -> set_volume($this -> get_volume() + 5); 
        }
    }

    public function menosVolume() {
        if ($this -> get_ligado()){
            $this -> set_volume($this -> get_volume() - 5);
        }
        
    }

    public function pause() {
        if ($this -> get_ligado() && $this -> get_tocando()){
            $this -> set_tocando(false);
        }
        
    }

    public function play() {
        if ($this -> get_ligado() && !$this -> get_tocando()){
            $this -> set_tocando(true);
        }
        
    }

}
