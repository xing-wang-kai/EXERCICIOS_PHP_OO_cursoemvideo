<?php
class Celular{
    var $modelo;
    var $marca;
    var $cor;
    var $internet;
    var $ligando;
    
   function ligar (){
       if ($this -> internet == false && $this -> ligando == false){
           echo"<ol>";
           echo "<ul><p>iniciando uma CHAMADA</p></ul></br>";
           echo"</ol>";
           
           $this -> ligando = true;
       }
       elseif($this -> internet == false && $this -> ligando == true){
           echo"<ol>";
           echo "<ul><p>você já está EM CHAMADA</p></ul></br>";
           echo"</ol>";
       }
       elseif($this -> internet == true && $this -> ligando == false){
           echo"<ol>";
           echo "<ul><p>você não pode ligar está na INTERNET</p></ul></br>";
           echo"</ol>";
       }
   }
   
   
   function encerrarligar(){
    if ($this -> internet == false && $this -> ligando == false){
        echo"<ol>";
        echo "<ul><p>você não pode encerrar a chamando não está LIGANDO</p></ul></br>";
        echo"</ol>";
   }
   elseif($this -> internet == false && $this -> ligando == true) {
       echo"<ol>";
       echo "<ul><p>A CHAMADA foi enceerrada</p></ul></br>";
       echo"</ol>";
       
       $this -> ligando = false;
   }
   elseif($this -> internet == true && $this -> ligando == false){
       echo"<ol>";
       echo "<ul><p>você não está LIGANDO está na INTERNET</p></ul></br>";
       echo"</ol>";
   }
       
   }
   
   
   function conectarinternet(){
       if($this -> internet == false && $this -> ligando == false){
           echo"<ol>";
           echo "<ul><p>CONECTANDO a internete...</p></ul></br>";
           echo"</ol>";
           $this -> internet = true;
           
       }
       elseif ($this -> internet == false && $this -> ligando == true){
           echo"<ol>";
           echo "<ul><p>Você não pode se CONECTAR está em LIGAÇÃO</p></ul></br> ";
           echo"</ol>";
       }
       elseif ($this -> internet == true && $this -> ligando == false){
           echo"<ol>";
           echo "<ul><p>vocÊ já está CONECTADO a internet</p></ul></br>";
           echo"</ol>";
       }
   }
   
   function desconectarinternet(){
       if($this -> internet == false && $this -> ligando == false){
           echo"<ol>";
           echo "<ul><p>você não está CONECTADO a internet.</p></ul></br>";
           echo"</ol>";
       }
       elseif ($this -> internet == false && $this -> ligando == true){
           echo"<ol>";
           echo "<ul><p>você não está na internet está LIGANDO.</p></ul></br>";
           echo"</ol>";
       }
       elseif ($this -> internet == true && $this -> ligando == false){
           echo"<ol>";
           echo "<ul><p>A internet foi DESCONECTADA</p></ul></br>";
           echo"</ol>";
           
           $this -> internet = false;
       }
   }
   
}
