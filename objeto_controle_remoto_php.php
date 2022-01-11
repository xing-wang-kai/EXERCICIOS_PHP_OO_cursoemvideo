<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EXERCICIOS DEFININDO OBJETOS EM PHP</title>
    </head>
    <body>
        <pre> 
            <?php
            include './class_controle_remoto_php.php';
            $controle_azul = new controle;
                $controle_azul -> cor = "azul";
                $controle_azul -> tamanho = 1.23;
                $controle_azul -> ligado = false;
                $controle_azul -> bateria = true;

                var_dump($controle_azul);

            $controle_azul -> ligar();
            $controle_azul -> ligar();
            $controle_azul -> desligar();
            $controle_azul -> desligar();
            $controle_azul -> ligar();
            ?>
       </pre> 
    </body>
</html>
