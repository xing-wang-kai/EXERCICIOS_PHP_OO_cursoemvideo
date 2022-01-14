
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tipo de Objeto Leitor</title>
    </head>
    <body>
        <pre>
        <?php
         require_once './class_leitor.php';
         require_once './class_livro.php';
         
         $p[0] = new Leitor("maria", 34, "F");
         $p[1] = new Leitor("joão", 21, "M");
         
         $l[0] = new Livro("PHP BASICO", "josé da silva", 300, $p[0]);
         $l[1] = new Livro("POO com PHP", "maria luiza", 400, $p[1]);
         $l[2] = new livro("poo avançado", "josé da lucia", 300, $p[1]);
         
         print_r($l[0]);
         print_r($l[1]);
         print_r($l[2]);
         print_r($l);
         $l[0] ->folhear(50);
         $l[0] ->voltarpag();
         $l[0] ->detalhes();
        ?>
        </pre>
    </body>
</html>
