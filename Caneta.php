<?php


class Caneta {
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;
  
  function rabiscar(){
      
      if ($this -> tampada == true){
         
          echo "A caneta esta TAMPADA, não posso rabiscar!</br>";
         
      }
      else{
          echo "Estou rabiscando</br>";
      }
       
  }
  function tampar(){
      if($this -> tampada == false){
          echo "A caneta foi TAMPADA</br>";
          $this -> tampada = true;
      }else{
          echo "A caneta já está TAMPADA</br>";
      }
  }
  function destampar(){
      if ($this -> tampada == true){
          echo "A caneta foi DESTAMPADA</br>";
          $this -> tampada = false;
      }else {
          echo "A caneta já está DESTAMPADA,</br>";
      }
      
  }
}
