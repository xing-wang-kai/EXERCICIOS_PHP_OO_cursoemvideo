<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         include_once './class_caneta02.php';
         
         $caneta01 = new Caneta("minha", "bic", 0.5, true);
         $caneta02 = new Caneta("sua", "motorola", 0.4, false);
         
         print_r($caneta01);
         print_r($caneta02);
         
        ?>
        </pre>
    </body>
</html>
