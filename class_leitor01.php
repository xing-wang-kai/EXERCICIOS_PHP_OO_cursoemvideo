<?php

class leitor{
    private $nome;
    private $idade;
    private $sexo;
    
    public function __construct($nome, $idade, $sexo){
        $this -> set_nome($nome);
        $this -> set_idade($idade);
        $this -> set_sexo($sexo);
    }
    
    public function fazerAniver(){
        $this -> idade ++;
    }
    
    //get methods
    
    public function get_nome(){
        return $this -> nome;
    }
    public function get_idade(){
        return $this -> idade;
    }
    public function get_sexo(){
        return $this -> sexo;
    }
    //set Methods
    public function set_nome($nome){
        $this -> nome = $nome;
    }
    public function set_idade($idade){
        $this -> idade = $idade;
    }
    public function set_sexo($sexo){
        $this -> sexo = $sexo;
    }
}


