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
        <?php
        include_once './class_televisao.php';
        
        $televisao = new Televisao;
        
            $televisao -> tamanho = 40.00;
            $televisao -> polegadas = 30;
            $televisao -> marca = "sangsung";
            $televisao -> ligado = false;
            $televisao -> chanal = true;
            
            
        var_dump($televisao);
            
        $televisao -> ligar();
        $televisao -> ligar();
        $televisao -> troca_canal();
        $televisao -> desligar();
        $televisao -> troca_canal();
        $televisao -> ligar();
        $televisao -> troca_canal();
            
        
        ?>
    </body>
</html>
