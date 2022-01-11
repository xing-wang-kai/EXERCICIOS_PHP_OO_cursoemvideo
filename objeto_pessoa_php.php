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
        
        include './Class_pessoa_php.php';
        
        $pessoa01 = new Pessoa;
            $pessoa01 -> nome = "joão";
            $pessoa01 -> idade = 23;
            $pessoa01 -> altura = 1.67;
            $pessoa01 -> comendo = false;
            $pessoa01 -> falando = false;
            
            var_dump($pessoa01);
            
         
            
         $pessoa01 -> comecarcomer();
         $pessoa01 -> comecarfalar();
         $pessoa01 -> comecarcomer();
         $pessoa01 -> pararcomer();
         $pessoa01 -> pararfalar();
         $pessoa01 -> pararcomer();
         $pessoa01 -> comecarfalar();
              
        ?>
    </body>
</html>
