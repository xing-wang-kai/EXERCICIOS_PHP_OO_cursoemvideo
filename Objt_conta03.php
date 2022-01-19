<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         require_once './class_conta03.php';
         
         $conta01 = new Conta("1234-001", "João", 2000);
         $conta02 = new Conta("1234-002", "veronica", 1000);
         $conta03 = new Conta("1234-003", "Antonio", 3000);
         
         var_dump($conta01);
         print_r($conta02);
         print_r($conta03);
         
         $conta01 -> sacar(400);
         $conta02 -> depositar(300);
         $conta03 -> transferir(500, $conta01);
         
         $conta01 -> imprimir();
         $conta02 -> imprimir();
         $conta03 -> imprimir();
        ?>
     </pre>
    </body>
</html>
