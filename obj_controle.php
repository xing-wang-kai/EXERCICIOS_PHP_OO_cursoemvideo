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
        <h1>PROJETO CONTROLE REMOTO - CURSO EM VIDEO PHPOO</h1>
        <?php
            require_once './class_controle.php';
            $c = new controle();
            var_dump($c);
            $c ->ligar();
            $c -> menosVolume();
            $c -> abrirMenu();
            
        ?>
    </body>
    </pre>
</html>
