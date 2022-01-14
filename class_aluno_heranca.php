<?php
require_once './class_pessoa_heranca.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
   public function __construct($nome, $idade, $sexo, $matricula, $curso) {
       parent::__construct($nome, $idade, $sexo);
       $this -> set_matricula($matricula);
        $this -> set_curso($curso);
   }
  
    public function cancelarMatricula(){
        $this -> get_matricula(false);
    }
    public function ativarMatricula(){
        $this -> get_matricula(true);
    }
    
    //get methods
    
    private function get_matricula(){
        return $this -> matricula;
    }
    private function get_curso(){
        return $this -> curso;
    }
    //set methods
    private function set_matricula($matricula){
        $this -> matricula = $matricula;
    }
    private function set_curso($curso){
        $this -> curso = $curso;
    }
         
}


