
<?php

require_once './interface_conta03.php';

class Conta implements interconta{
    private $numero;
    private $nome;
    private $saldo;
    private $limite;
    private $extrato;

    
    public function __construct($numero, $nome, $saldo) {
        
        $this -> set_limite(5000);
        $this -> set_nome($nome);
        $this -> set_saldo($saldo);
        $this -> set_numero($numero);
        $this -> extrato = [];
        
    }
    
    private function get_numero(){
        return $this -> numero;
    }
    private function get_nome(){
        return $this -> nome;
    }
    private function get_saldo(){
        return $this -> saldo;
    }
    private function get_limite(){
        return $this -> limite;
    }
    
    private function set_numero($numero){
        $this -> numero = $numero;
    }
    private function set_nome($nome){
        $this -> nome = $nome;
    }
    private function set_saldo($saldo){
        if ($saldo > $this -> get_limite()){
            echo "NÃO É POSSIVEL ADICIONAR ESTE SALDO </br>";
        }
        else{
            $this -> saldo = $saldo;
        }
    }
    private function set_limite($limite){
        $this -> limite = $limite;
    }
    public function depositar($valor) {
        $this -> set_saldo($this -> saldo += $valor);
        $this -> extrato[] = "DEPOSITOU R$ $valor, SALDO R$ {$this -> get_saldo()}</br>";
    }

    public function imprimir() {
        echo "-----------------------------------------</br>";
            print_r($this -> extrato);        
        echo "-----------------------------------------</br>";
        
    }

    public function sacar($valor) {
        if ($valor > $this -> get_saldo()){
            echo "O VALOR É MAIOR QUE O SALDO NAO PODE SACAR</br>";
        }
        else{
            $this -> set_saldo($this -> saldo -= $valor);
            $this -> extrato[] = "SACOU R$ $valor, SALDO R$ {$this -> get_saldo()}</br>";
        }
        
    }

    public function transferir($valor, $remetente) {
        $this -> sacar($valor);
        $remetente -> set_saldo($remetente -> saldo += $valor);
        $this -> extrato[] = "TRANSFERIU R$ $valor, PARA {$remetente -> get_nome()} SEU SALDO {$this -> get_saldo()}</br>";
        $remetente -> extrato[] = "RECEBEU R$ $valor, DE {$this -> get_nome()} SEU SALDO: {$remetente -> get_saldo()}</br>";
    }

}


