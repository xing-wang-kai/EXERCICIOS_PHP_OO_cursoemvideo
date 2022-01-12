<?php


    class Conta{
        var $numero;
        var $nome;
        var $saldo;
        var $limite = 1000;
        var $extrato = [];
        
        function sacar($valor){
            if ($valor > $this -> saldo){
                echo "</br>o valor solicitado para SAQUE é maior que o saldo</br>";
            }
            else{
                $this -> saldo -= $valor;
                echo "</br>você realizou saque de $valor</br>";
                $this -> extrato[] = "você saque de R$ $valor seu saldo é R$ ".$this -> saldo;
            }
        }
        function depositar($valor){
            $this -> saldo += $valor;
            $this -> extrato[] = "você realizou deposito de  R$ $valor seu saldo é R$ ".$this -> saldo;
        }
        
        
        function transferir($valor, $numero){
            $numero -> saldo += $valor;
            $this -> sacar($valor);
            echo "na conta  de ".$numero ->nome."</br>";
            $this -> extrato[] = "você transferiu o R$ $valor seu saldo é R$ ".$this -> saldo."para a conta ".$numero -> numero." no nome de ".$numero -> nome;
            $numero -> extrato[] = "você recebeu o valor de R$ $valor seu saldo é R$ ".$numero -> saldo." da conta ".$this -> numero." no nome de ".$this -> nome;
            
        }
        function saldo(){
            echo"</br>o saldo do cliente é ".$this -> saldo."</br>";
            $this -> extrato[] = "você retirou o extrato da sua conta";
        }
        
        function imprimir(){
            echo "----------------------------";
            var_dump($this -> extrato);
            /*$c = strlen($this -> extrato);
            for ($j = 0;  $j <= $c; $j++){
                echo "--".$this -> extrato[$j]."</br>";}*/
                }
            
}
