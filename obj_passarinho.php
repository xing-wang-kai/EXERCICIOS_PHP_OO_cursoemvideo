<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include_once './class_passarinho.php';
         
         $canarinho = new passarinho;
         
            $canarinho -> nome = "zé";
            $canarinho -> cor = "amarelo";
            $canarinho -> especimie = "canarinho";
            $canarinho -> canto = false;
            $canarinho -> comer = false;
         
        var_dump($canarinho);

        $canarinho -> comecarcomer();
        $canarinho -> comecarcantar();
        $canarinho -> comecarcomer();
        $canarinho -> pararcantar();
        $canarinho -> pararcomer();
        $canarinho -> pararcomer();
        $canarinho -> pararcantar();
        $canarinho -> comecarcantar();
        $canarinho -> comecarcomer();
        $canarinho -> comecarcantar();
        $canarinho -> pararcomer();
        $canarinho -> pararcantar();
            
        ?>
    </body>
</html>
