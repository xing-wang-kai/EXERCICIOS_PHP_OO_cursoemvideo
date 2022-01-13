<?php

class Caneta{
    private $nome;
    private $ponta;
    private $modelo;
    private $tampada;
    
    
    public function __construct($nome, $ponta, $modelo, $tampada){
        $this -> set_nome($nome);
        $this -> set_ponta($ponta);
        $this -> set_modelo($modelo);
        $this -> set_tampada($tampada);
    }
    
    
    public function get_nome(){
        return $this -> nome;
    }
    public function set_nome($nome){
        $this -> nome = $nome;
    }
    
    public function get_ponta(){
        return $this -> ponta;
    }
    public function set_ponta($ponta){
        $this -> ponta = $ponta;
    }
    
    public function get_modelo(){
        return $this -> modelo;
    }
    public function set_modelo($modelo){
        $this -> modelo = $modelo;
    }
    
    public function get_tampada() {
        return $this -> tampada;
    }
    public function set_tampada($tampada){
        $this -> tampada = $tampada;
    }
}
