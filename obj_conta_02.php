<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
          include_once './class_conta_02.php';
          
          $cliente01 = new Conta("1234", "Rogério", 500);
          $cliente02 = new Conta("1235", "Selina", 800);
          $cliente04 = new conta("1236", "Fernanda", 400);
          
          $cliente01 ->abrir_conta("CC");
          $cliente02 ->abrir_conta("CP");
          $cliente04 ->abrir_conta("CC");
                  
          print_r($cliente01);
          print_r($cliente02);
          print_r($cliente04);
          
          $cliente01 -> sacar(50);
          $cliente04 -> depositar(322);
          $cliente02 -> transferir(200, $cliente04);
          $cliente01 -> depositar(60);
          $cliente02 -> sacar(75);
          
          $cliente01 -> imprimir_extrato();
          $cliente02 -> imprimir_extrato();
          $cliente04 -> imprimir_extrato();
        ?>
        </pre>
    </body>
</html>
