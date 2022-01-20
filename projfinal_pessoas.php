<?php

class projfinal_pessoas {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    
    public function __construct($nome, $idade, $sexo) {
        $this -> setNome($nome);
        $this -> setIdade($idade);
        $this -> setSexo($sexo);
        $this -> setExperiencia(0);
    }
    
    protected function ganharExp(){
        $this -> SetExperiencia($this -> getExperiencia() + 1);
    }
    
    private function getNome(){
        return $this -> nome;
    }
    private function getIdade(){
        return $this -> idade;
    }
    private function getSexo(){
        return $this -> sexo;
    }
    private function getExperiencia(){
        return $this -> experiencia;
    }
    private function setNome($nome){
        $this -> nome = $nome;
    }
    private function setIdade($idade){
        $this -> idade = $idade;
    }
    private function setSexo($sexo){
        $this -> sexo = $sexo;
    }
    private function setExperiencia($experiencia){
        $this -> experiencia = $experiencia;
    }
    
    
}
