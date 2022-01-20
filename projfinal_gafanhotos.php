<?php

require_once './projfinal_pessoas.php';
class Gafanhotos extends projfinal_pessoas{
    private $login;
    private $totassistidos;
    
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this -> setLogin($login);
        $this -> setTotAssistidos(0);
    }
    
    public function viuMaisUm(){
        $this -> setTotAssistidos($this -> getTotAssistidos() + 1);
    }
    
    private function getLogin(){
        return $this -> login;
    }
    public function getTotAssistidos(){
        return $this -> totassistidos;
    }
    private function setLogin($login){
        $this -> login = $login;
    }
    public function setTotAssistidos($totassistidos){
        $this -> totassistidos = $totassistidos;
    }
}
