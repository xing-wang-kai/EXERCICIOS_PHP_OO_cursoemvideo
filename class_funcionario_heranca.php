<?php

require_once './class_pessoa_heranca.php';

class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;
    
    public function __construct($nome, $idade, $sexo, $setor, $trabalhando) {
        parent::__construct($nome, $idade, $sexo);
        $this -> set_setor($setor);
        $this -> set_trabalhando($trabalhando);
    }
    
    public function mudarTrabalho(){
        $this -> trabalhado = !$this -> trabalhando;
    }
    
    
    //get methods
    private function get_setor(){
        return $this -> setor;
    }
    private function get_trabalhando(){
        return $this -> trabalhando;
    }
    //set methods
    private function set_setor($setor){
        $this -> setor = $setor;
    }
    private function set_trabalhando($trabalhando){
        $this -> trabalhando = $trabalhando;
    }

}
