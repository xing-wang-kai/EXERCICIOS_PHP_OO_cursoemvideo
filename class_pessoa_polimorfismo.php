<?php

abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    
    
    public final function fazerAniver(){
        $this -> idade += 1;
    }
    public function __construct($nome, $idade, $sexo){
        $this -> setNome($nome);
        $this -> setIdade($idade);
        $this -> setSexo($sexo);
        
    }
    
    private function getNome(){
        
        return $this -> nome;
    }
    
    private function getIdade(){
        
        return $this -> idade;
    }
    
    private function getSexto(){
        
        return $this -> sexo;
    }
    
    private function setNome( $nome ){
        
        $this -> nome = $nome;
    }
    
    private function setIdade( $idade ){
        
        $this -> idade = $idade;
    }
    
    private function setSexo( $sexo){
        
        $this -> sexo = $sexo;
    }
    
    
}

class Visitante extends Pessoa{
    public function __construct($nome, $idade, $sexo){
        parent::__construct($nome, $idade, $sexo);    
    }
    
}

class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
    public function pagarMensalidade(){
        echo "a mensalidade foi paga";
    }
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this -> setMatricula($matricula);
        $this -> setCurso($curso);
    }
    
    private function getMatricula(){
        return $this -> matricula;
    }
    private function getCurso(){
        return $this -> curso;
    }
    private function setMatricula($matricula){
        $this -> matricula = $matricula;
    }
    private function setCurso($curso){
        $this -> curso = $curso;
    }
    
}

class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa(){
        echo "a bolsa foi renovada";
    }
    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this -> setBolsa($bolsa);
    }
    
    //@sobrepor
    public function pagarMensalidade(){
        echo "a mensalidade foi paga";
    }
    
    private function getBolsa(){
        
        return $this -> bolsa;
    }
    private function setBolsa($bolsa){
        $this -> bolsa = $bolsa;
    }
}

