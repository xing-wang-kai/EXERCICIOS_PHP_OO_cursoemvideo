<?php

    class Conta{
        var $numero;
        var $nome;
        var $saldo;
        var $limite = 1000;
        
        function sacar($valor){
            if ($valor > $this -> saldo){
                echo "</br>o valor solicitado para SAQUE é maior que o saldo</br>";
            }
            else{
                $this -> saldo -= $valor;
                echo "</br>você realizou o depósito de $valor</br>";
            }
        }
        function depositar($valor){
            $this -> saldo += $valor;
        }
        
        
        function transferir($valor, $numero){
            $numero -> saldo += $valor;
            $this -> sacar($valor);
            echo "na conta  de ".$numero ->nome."</br>";
            
        }
        function saldo(){
            echo"</br>o saldo do cliente é ".$this -> saldo."</br>";
        }
    }
