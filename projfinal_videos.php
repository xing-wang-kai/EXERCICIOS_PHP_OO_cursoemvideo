<?php
require_once './projfinal_acaovideo.php';

class Videos implements projfinal_acaovideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzido;
    
    public function __construct($titulo, $views) {
        $this -> setTitulo($titulo);
        $this -> avaliacao = 0;
        $this -> setViews($views);
        $this -> setCurtidas(0);
        $this -> setReproduzido(false);
        
    }
    
    private function getTitulo(){
        return $this -> titulo;
    }
    private function getAvaliacao(){
        return $this -> avaliacao;
    }
    public function getViews(){
        return $this -> views;
    }
    private function getCurtidas(){
        return $this -> curtidas;
    }
    private function getReproduzido(){
        return $this -> reproduzido;
    }
    private function setTitulo($titulo){
        $this -> titulo = $titulo;
    }
    public function setAvaliacoes($avaliacao){
        $media = ($this -> avaliacao = $avaliacao)/$this ->getViews();
        $this -> avaliacao = $media;
    }
    public function setViews($views){
        $this -> views = $views;
    }
    private function setCurtidas($curtidas){
        $this -> curtidas = $curtidas;
    }
    private function setReproduzido($reproduzido){
        $this -> reproduzido = $reproduzido;
    }
    public function play(){
        $this -> reproduzido = true;
    }
    public function pause(){
        $this -> reproduzido = false;
    }
    public function like(){
        $this -> curtidas += 1;
    }
}