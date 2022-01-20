<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         require_once './class_pessoa_polimorfismo.php';
         
         ///$p1 = new Pessoa("joão", 23, 'm');
         $v1 = new Visitante("Carlos", 33, 'm');
         $a1 = new Aluno("Eduardo", 23, 'm', "1233-01", "agronomica");
         ///print_r($p1);
         print_r($v1);
         print_r($a1);
        ?>
        </pre>
    </body>
</html>
