<?php
require_once './inter_publicacao01.php';
class Livro implements inter_publicacao01{
    private $titulo;
    private $autor;
    private $totpag;
    private $pagatual;
    private $aberto;
    private $leitor;
    
    //constructor method
    
    public function __construct($titulo, $autor, $totpag, $leitor){
        $this -> set_titulo($titulo);
        $this -> set_autor($autor);
        $this -> set_totpag($totpag);
        $this -> set_leitor($leitor);
        $this -> set_pagatual(0);
        $this -> set_aberto(false);
        
    }
    
    public function detalhar(){
        echo "</br>----------------------------------------------------</br>";
        echo "</br>NOME DO LIVRO : {$this -> get_titulo()}</br>";
        echo "</br>NOME DO AUTOR : {$this -> get_autor()}</br>";
        echo "</br>TOTAL PÁGINAS : {$this -> get_totpag()}</br>";
        echo "</br>PÁGINA ATUAL : {$this -> get_pagatual()}</br>";
        echo "</br>ESTA SENDO LIDO POR: ".$this -> leitor -> get_nome()."</br>";
        echo "</br>----------------------------------------------------</br>";
    }
    
    //get methods
    
    private function get_leitor(){
        return $this -> leitor;
    }
    private function get_autor(){
        return $this -> autor;
    }
    private function get_titulo(){
        return $this -> titulo;
    }
    private function get_totpag(){
        return $this -> totpag;
    }
    private function get_pagatual(){
        return $this -> pagatual;
    }
    private function get_aberto(){
        return $this -> aberto;
    }
    
    //set methods
    private function set_leitor($leitor){
        $this -> leitor = $leitor;
    }
    private function set_autor($autor){
        $this -> autor = $autor;
    }
    private function set_titulo($titulo){
        $this -> titulo = $titulo;
    }
    private function set_totpag($totpag){
        $this -> totpag = $totpag;
    }
    private function set_pagatual($pagatual){
        $this -> pagatual = $pagatual;
    }
    private function set_aberto($aberto){
        $this -> aberto = $aberto;
    }

    public function abrir() {
        $this -> set_aberto(true);
    }

    public function fechar() {
        $this -> set_aberto(false);
    }

    public function folhear($pagina) {
        
        if ($pagina > $this -> get_totpag()){
            $this -> set_pagatual(0);
        }
        else{
             $this -> set_pagatual($pagina);
        }
    }

    public function proxpag() {
        $this -> set_pagatual($this -> get_pagatual() + 1);
        
    }

    public function retorpag() {
        $this -> set_pagatual($this -> get_pagatual() -1);
        
    }

}
