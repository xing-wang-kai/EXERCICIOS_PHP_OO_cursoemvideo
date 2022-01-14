<?php
require_once './class_lutadores.php';
class Luta{
    
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovadas;
    
    
    public function marcarLuta($l1, $l2){
        if(($l1 -> get_categoria() === $l2 -> get_categoria())&&($l1 != $l2)){
            $this -> aprovadas = true;
            $this -> desafiado = $l1;
            $this -> desafiante = $l2;
        }
        else{
            $this -> aprovadas = false;
            $this -> desafiado = null;
            $this -> desafiante = null;
        }
    }
    
    public function lutar(){
        if ($this -> aprovadas){
            $this -> desafiado -> Apresentar();
            $this -> desafiante -> Apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor){
                case 0:
                    echo "--------------------------------------</br>";
                    echo "os jogadores empataram o desafio</br>";
                    $this -> desafiante -> EmpatarLuta();
                    $this -> desafiado -> EmpatarLuta();
                    echo "--------------------------------------</br>";
                    break;
                case 1:
                    echo "--------------------------------------</br>";
                    echo " o jogador".$this -> desafiante -> get_nome()." VENCEU A LUTA</br>";
                    $this -> desafiante -> GanharLuta();
                    $this -> desafiado -> PerderLuta();
                    echo "--------------------------------------</br>";
                    break;
                case 2:
                    echo "--------------------------------------</br>";
                    echo " o jogador".$this -> desafiado -> get_nome()." VENCEU A LUTA</br>";
                    $this -> desafiado -> GanharLuta();
                    $this -> desafiante -> PerderLuta();
                    echo "--------------------------------------</br>";
                    break;   
            }
            
        }
        else {
            echo "A LUTA NÃO FOI APROVADA!</br>";
        }
        
    }
    //Metodos especciais
    function get_desafiado(){
        return $this -> desafiado;
    }
    function get_desafiante(){
        return $this -> desafiante;
    }
    function get_rounds(){
        return $this -> rounds;    
    }
    function get_aprovadas(){
        return $this -> aprovadas;
    }
    function set_desafiado($desafiado){
        $this -> desafiado = $desafiado;
    }
    function set_desafiante($desafiante){
        $this -> desafiante = $desafiante;
        
    }
    function set_rounds($rounds){
        $this -> rounds = $rounds;
        
    }
    function set_aprovados($aprovados){
        $this -> aprovados = $aprovados;
        
    }
}
