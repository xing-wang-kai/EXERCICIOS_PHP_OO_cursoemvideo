<?php
require_once './inter_publicacao.php';
require_once './class_leitor.php';


class Livro implements inter_publicacao{
    private $titulo;
    private $autor;
    private $totapag;
    private $pagatual;
    private $aberto;
    private $leitor;
    
    public function __construct($titulo, $autor, $totapag, $leitor){
        $this -> set_titulo($titulo);
        $this -> set_autor($autor);
        $this -> set_totapag($totapag);
        $this -> set_leitor($leitor);
        $this -> pagatual = 0;
        $this -> aberto = false;
    }
    
    public function detalhes(){
        echo "</br>--------------------------------------------------------------</br>";
        echo "TITULO DO LIVRO: ".$this -> get_titulo()." | ESCRITO POR: ".$this -> get_autor();
        echo "</br> TOTAL DE PAG:".$this -> get_totapag();
        echo "</br> SENDO LIDO POR: ".$this -> leitor -> get_nome()."</br>";
        echo "</br> PÀGINA ATUAL:".$this -> get_pagatual();
        echo "</br>--------------------------------------------------------------</br>";
        
    }
    
    
    //public function get
    private function get_titulo(){
        return $this -> titulo;
    }
    private function get_autor(){
        return $this -> autor;
    }
    private function get_totapag(){
        return $this -> totapag;
    }
    private function get_pagatual(){
        return $this -> pagatual;
    }
    private function get_aberto(){
        return $this -> aberto;
    }
    private function get_leitor(){
        return $this -> leitor;
    }
    
    
    //function set methods
    private function set_titulo($titulo){
        $this -> titulo = $titulo;
    }
    private function set_autor($autor){
        $this -> autor = $autor;
    }
    private function set_totapag($totapag){
        $this -> totapag = $totapag;
    }
    private function set_pagatual($pagatual){
        $this -> pagatual = $pagatual;
    }
    private function set_aberto($aberto){
        $this -> aberto = $aberto;
    }
    private function set_leitor($leitor){
        $this -> leitor = $leitor;
    }
    
    //abs methods

    public function abrir() {
        $this -> aberto = true;
    }

    public function fechar() {
        $this -> aberto = false;
        
    }

    public function folhear($p) {
        if ($p > $this -> totapag){
            $this -> pagatual = 0;
        }
        else {
            $this -> pagatual = $p;
        }
    }

    public function proxpag() {
        $this -> pagatual = $this -> get_pagatual() + 1;
    }

    public function voltarpag() {
        $this -> pagatual = $this->get_pagatual() -1;
        
    }

}