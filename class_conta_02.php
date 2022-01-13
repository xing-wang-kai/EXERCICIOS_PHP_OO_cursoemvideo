<?php

class Conta{
    private $numero;
    protected $tipo = "CC";
    public $nome;
    public $saldo = 0;
    public $status = false;
    public $extrato = [];
    
    public function __construct($num, $nom, $sald){
        $this -> set_numero($num);
        $this -> set_nome($nom);
        $this -> set_saldo($sald);
            
        }
   
        
    public function get_numero(){
        return $this -> numero;
    }
    public function set_numero($valor){
            $this -> numero = $valor;        
    }
    
    
    public function get_tipo(){
        return $this -> tipo;
    }
    public function set_tipo($valor){
        
        if ($valor == "CC" || $valor == "CP"){
            
            $this -> tipo = $valor;
            
        }
        else{
            echo "o tipo $valor não pode ser atribuido a conta, por padrão está conta sera CC</br>";
            echo "Entre em contato com o ADMINISTRADOR de sua conta para trocar o tipo</br>";
        }
    }
    
    
    public function get_nome(){
        return $this -> nome;
    }
    
    public function set_nome($valor){
        $this -> nome = $valor;
    }
    
    
    
    public function get_saldo(){
        return $this -> saldo;
    }
    public function set_saldo($valor){
        if ($valor < 0){
            echo "Não é possivl atribuir valores negativo a conta</br>";
        }
        $this -> saldo = $valor;
    }
    
    
    
    public function get_status(){
        return $this -> status;
    }
    public function set_status($valor){
        $this -> status = $valor;
    }
    
    public function abrir_conta($t){
        $this -> set_tipo($t);
        if ($t = "CC"){
                $this -> saldo += 50;
            }else{
                $this -> saldo += 150;
            }
        $this -> status = true;
        
    }
    
    public function fechar_conta(){
        if ($this -> saldo > 0 && $this -> saldo < 0){
            if ($this -> saldo < 0){
                echo "O saldo é negativo, não pode fechar a conta, regularize seus débitos antes</br>";
            if ($this -> saldo > 0){
                echo "você ainda tem dinheiro na sua conta, saque o saldo remanescente</br>";
            }
            }
        }
        else{
            echo "sua conta foi fechada!</br>";
            $this -> status = false;
            $this -> extrato[] = "--SUA CONTA FOI ENCERRADA--</br>";
        }
    }
    
    
    public function sacar($valor){
        if ($this -> status == false){
            echo "não é possivel sacar de uma conta ENCERRADA</br>";
        }
        else{
            if ($valor > $this -> saldo){
            echo "Não é possivel sacar o valor é maior que seu saldo, seu saldo é {$this -> saldo}</br>";
            }
            else{
            $this -> saldo -= $valor;
            $this -> extrato[] = "--Você sacou o valor de $valor o saldo remanescente é de {$this -> saldo}</br>";
            }
        }            
    } 
    
    
    
    public function depositar($valor){
        
        if($this -> status == false){
            echo "Não é posivel realizar depósitos para uma conta ENCERRADA</br>";
        }
        else{
            $this -> saldo += $valor;
            $this -> extrato[] = "--Você depositou o valor de R$ $valor o saldo atual é de R$ {$this -> saldo}</br>";
        }
         
     }
     
     
     
     
    public function transferir($valor, $num_conta){
        $this -> sacar($valor);
        $num_conta -> depositar($valor);
        $this -> extrato[] = "--Você transferiu o valor de R$ $valor para a conta de numero {$num_conta->numero} no nome de {$num_conta->nome} seu saldo é de {$this -> saldo}</br>";
        $num_conta -> extrato[] = "--Você recebeu o deposito de R$ $valor da conta de número {$this -> numero} no nome de {$this -> nome} seu slado é de {$num_conta -> saldo} </br>";
    }
    
    public function taxa(){
        if ($this -> tipo == "CC"){
            $this -> saldo -= 12;
        }
        else{
            $this -> saldo -=20;
        }
    }
    
    
    public function imprimir_extrato(){
        echo "----------------------------";
        var_dump($this -> extrato);
    }
  
}
