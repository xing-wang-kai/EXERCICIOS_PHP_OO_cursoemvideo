<?php
class lutador{
    private $nome;
    private $nascionalidade;
    private $idade, $peso, $altura;
    private $categoria;
    private $vitorias, $derrotas, $empates;
    
    
    public function __construct($nome, $nascionalidade, $idade, $peso, $altura, $vitorias, $derrotas, $empates){
        $this -> set_nome($nome);
        $this -> set_nascionalidade($nascionalidade);
        $this -> set_idade($idade);
        $this -> set_peso($peso);
        $this -> set_altura($altura);
        $this -> set_vitorias($vitorias);
        $this -> set_derrotas($derrotas);
        $this -> set_empates($empates);
    }
    
    function GanharLuta(){
        $this -> set_vitorias($this -> get_vitorias() + 1);
        
    }
    function PerderLuta(){
        $this -> set_derrotas($this -> get_derrotas() + 1);
    }
    function EmpatarLuta(){
        $this -> set_empates($this -> get_empates() + 1);
    }
    function Apresentar(){
        echo "<p>-------------------------------------------------------</p>";
        echo "<p>CHEGOU A HORA O LUTADOR: {$this -> get_nome()}</p>";
        echo "<p>VEIO DIRETAMNETE DE: {$this -> get_nascionalide()}</p>";
        echo "<p>TEM A IDADE DE: {$this -> get_idade()}</p>";
        echo "<p>TEM O PESO DE: {$this -> get_peso()}</p>";
        echo "<p>TEM A ALTURA DE: {$this -> get_altura()}</p>";
        echo "<p>TEM TEM TOTAL DE: {$this -> get_vitorias()} VITORIAS </p>";
        echo "<p>TEM TEM TOTAL DE: {$this -> get_derrotas()} DERROTAS </p>";
        echo "<p>TEM TEM EMPATES: {$this -> get_empates()} EMPATES</p>";
        echo "<p>-------------------------------------------------------</p>";
    }
    function Status(){
        echo "<p>-------------------------------------------------------</p>";
        echo "<p>NOME: {$this -> get_nome()}</p>";
        echo "<p>NASCIONALIDADE: {$this -> get_nascionalide()}</p>";
        echo "<p>IDADE: {$this -> get_idade()}</p>";
        echo "<p>PESO: {$this -> get_peso()}</p>";
        echo "<p>ALTURA: {$this -> get_altura()}</p>";
        echo "<p>VITORIAS: {$this -> get_vitorias()} </p>";
        echo "<p>DERROTAS: {$this -> get_derrotas()} </p>";
        echo "<p>EMPATES: {$this -> get_empates()} EMPATES</p>";
        echo "<p>-------------------------------------------------------</p>";
    }


     public function get_nome(){
        return $this -> nome;
    }
    private function get_nascionalide(){
        return $this -> nascionalidade;
    }
    private function get_idade(){
        return $this -> idade;
    }
    private function get_peso(){
        return $this -> peso;
    }
    private function get_altura(){
        return $this -> altura;
    }
    private function get_vitorias(){
        return $this -> vitorias;
    }
    private function get_derrotas(){
        return $this -> derrotas;
    }
    private function get_empates(){
        return $this -> empates;
    }
    public function get_categoria(){
        return $this -> categoria;
    }

    private function set_nome($nome){
        $this -> nome = $nome;
    }
    private function set_nascionalidade($nascionalidade){
        $this -> nascionalidade = $nascionalidade;
    }
    private function set_idade($idade){
        $this -> idade = $idade;
    }
    private function set_peso($peso){
        $this -> peso = $peso;
        $this -> set_categoria();
    }
    private function set_altura($altura){
        $this -> altura = $altura;
    }
    private function set_vitorias($vitorias){
        $this -> vitorias = $vitorias;
    }
    private function set_derrotas($derrotas){
        $this -> derrotas = $derrotas;
    }
    private function set_empates($empates){
        $this -> empates = $empates;
    }
    private function set_categoria(){
        if ($this -> get_peso() <= 52.20){
            $this -> categoria = "inválida";
        }
        elseif ($this -> get_peso() <= 70.30){
            $this -> categoria = "PESO LEVE";
        }
        elseif ($this -> get_peso() <= 83.90){
            $this -> categoria = "PESO MÉDIO";
        }
        elseif ($this -> get_peso() <= 120.20){
            $this -> categoria = "PESO PESADO";
        }
        else{
            $this -> categoria = "categoria inválida";
        }
    }

}

