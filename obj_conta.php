<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
         <?php
           include_once './class_conta.php';
           
           $cliente01 = new Conta;
               $cliente01 -> numero = "1234-2";
               $cliente01 -> nome = "jose";
               $cliente01 -> saldo = 200;
               
               
               var_dump($cliente01);
               
           $cliente02 = new conta;
                $cliente02 -> numero = "1234-4";
                $cliente02 -> nome = "jessica";
                $cliente02 -> saldo = 500;
                
                var_dump($cliente02);
                
                
            echo "</br>---------------------------------------</br>";
            echo "cliente 01 deposita 400 para sua conta</br>";
            echo "---------------------------------------</br>";
            
            $cliente01 -> sacar(400);
            $cliente01 -> saldo();
            echo "</br>---------------------------------------</br>";
            echo "cliente 01 saca o valor de 100 da conta</br>";
            echo "---------------------------------------</br>";
            echo "</br>sacou: ";
            $cliente01 -> sacar(100);
            echo "</br>saldo: ";
            $cliente01 -> saldo();
            echo "</br>---------------------------------------</br>";
            echo "cliente 02 transfere 300 para cliente 01</br>";
            echo "---------------------------------------</br>";
            echo "</br>SALDO DO CLIENTE 02: ";
            $cliente02 -> saldo();
            echo "</br>CLIENTE 02 TRANSFERIU: ";
            $cliente02 -> transferir(300, $cliente01);
             echo "</br>CLIENTE 01 DEPOSITOU: ";
            $cliente01 -> depositar(40);
            echo "</br>saldo conta 02: ";
            $cliente02 -> saldo();
            echo "</br>saldo conta 01: ";
            $cliente01 -> saldo();
            
            
               
         
         
         ?>
        </pre>
        
    </body>
</html>
