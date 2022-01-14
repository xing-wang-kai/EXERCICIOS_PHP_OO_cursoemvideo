<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         require_once './class_aluno_heranca.php';
         require_once './class_funcionario_heranca.php';
         require_once './class_pessoa_heranca.php';
         require_once './class_professor_heranca.php';
         
         $p1 = new Pessoa("vanderlei", 23, "m");
         $p2 = new Aluno("joaquim", 24, "M", true, "inglês");
         $p3 = new Professor("Mariana", 34, "F", "Eduação fisica", 2500.30);
         $p4 = new Funcionario("Clemencio", 33, "M", "RH", "True");
         
         print_r($p1);
         print_r($p2);
         print_r($p3);
         print_r($p4);
         
        
        ?>
       </pre>
    </body>
</html>
