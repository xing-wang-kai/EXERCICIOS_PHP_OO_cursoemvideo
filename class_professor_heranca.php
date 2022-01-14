<?php
require_once './class_pessoa_heranca.php';

class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this -> setEspecialidade($especialidade);
        $this -> setSalario($salario);
    }
    
    public function receberuamento($aumento){
        $this -> set_salario($this -> get_salário() + $aumento);
    }
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }


}
