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
            include_once './class_celular.php';
            
            $mysmartfone = new Celular;
                $mysmartfone -> modelo = 12;
                $mysmartfone -> marca = "apple";
                $mysmartfone -> cor = "prata";
                $mysmartfone -> internet = true;
                $mysmartfone -> ligando = false;
                
                var_dump($mysmartfone);
                
            $mysmartfone -> ligar();
            $mysmartfone -> encerrarligar();
            $mysmartfone -> conectarinternet();
            $mysmartfone -> desconectarinternet();
            $mysmartfone -> ligar();
            $mysmartfone -> conectarinternet();
            $mysmartfone -> desconectarinternet();
            $mysmartfone -> encerrarligar();
            $mysmartfone -> desconectarinternet();
            $mysmartfone -> encerrarligar();
            
        ?>
        </pre>
    </body>
</html>
