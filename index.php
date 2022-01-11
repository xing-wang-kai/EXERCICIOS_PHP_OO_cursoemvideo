<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CRIANDO CLASSE DE PARA ORIENTAÇÃO A OBJ</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Caneta.php';
            
            $c1 = new Caneta;
                $c1 -> cor = "preta";
                $c1 -> ponta = 0.5;
                $c1 -> tampada = true;
            
                var_dump($c1);
            
            $c1 ->rabiscar();
            $c1 ->tampar();
            $c1 ->destampar();
            $c1 ->rabiscar();
            $c1 ->destampar();
            $c1 ->tampar();
            
            
            
        ?>
        </pre>
    </body>
</html>
