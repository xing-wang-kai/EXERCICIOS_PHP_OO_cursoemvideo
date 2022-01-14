<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         include_once './class_leitor01.php';
         include_once './class_livro01.php';
         
         $l[0] = new leitor("joaquin", 23, "m");
         $l[1] = new leitor("Maria", 42, "f");
         
         
         $livro[0] = new Livro("PHP FENOMENO", "NÁTALIA DUARTE", 400, $l[0]);
         $livro[1] = new Livro("PHP HISTÓRIA", "VERNOICA CASAGRANDE", 300, $l[0]);
         $livro[2] = new livro("TECNICAS EM CPP", "MANUAL DE CASTRO", 500, $l[1]);
         
         print_r($l[0]);
         
         $livro[0] -> detalhar();
         $livro[1] -> detalhar();
         $livro[2] -> detalhar();
         
         $livro[0] ->folhear(80);
         
         $livro[0] ->proxpag();
         $livro[0] ->retorpag();
         $livro[0] ->retorpag();
         
         $livro[0] ->detalhar();
        ?>
     </pre>
    </body>
</html>
