<?php
require_once './projfinal_gafanhotos.php';
require_once './projfinal_videos.php';
class Visualizacao{
  private $espectador;
  private $filme;
  
  public function __construct($espectador, $filme) {
      $this ->setEspectador($espectador);
      $this ->setFilme($filme);
      $this -> filme -> setViews($this -> filme -> getViews() + 1);
      $this -> espectador -> setTotAssistidos($this -> espectador -> getTotAssistidos() + 1);
  }
  
  private function getEspectador(){
      return $this -> espectador;
  }
  private function getFilme(){
      return $this -> filme;
  }
  private function setEspectador($espectador){
      $this -> espectador = $espectador;
  }
  private function setFilme($filme){
      $this -> filme = $filme;
  }
  public function avaliar(){
      $this -> filme -> setAvaliacoes(5);
  }
  public function avaliarNota($nota){
      $this -> filme -> setAvaliacoes($nota);
      
  }
  public function avaliarPorc($porc){
      $nota = 0;
      if ($porc <= 20){
          $nota = 3;
      }
      elseif($porc <= 50){
          $nota = 5;
      }
      elseif ($porc <= 80){
          $nota = 8;
      }
      else{
          $nota = 10;
      }
      $this -> filme -> setAvaliacoes($nota);
      
  }
}
