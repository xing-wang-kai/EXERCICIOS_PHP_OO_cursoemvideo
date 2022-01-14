
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         include_once './class_lutadores.php';
         include_once './class_luta.php';
         $pettyboy = new lutador("PettyBoy", "França", 31, 68.9, 1.75, 11, 2, 1);
         $putscript = new lutador("PutScript", "Brasil", 29, 57.89, 1.68, 14, 2, 1);
         $snapshadow = new lutador("SnapShadow", "EUA", 35, 80.90, 1.65, 12, 2, 1);
         $deadcode = new lutador("DeadCode", "Australia", 28, 81.60, 1.95, 13, 0, 2);
         $ufocobol = new lutador("UFOCobol", "Brasil", 37, 119.30, 1.70, 5, 4, 3);
         $nerdaart = new lutador("NerdaArt", "Americado", 30, 105.7, 1.81, 12, 2, 4);
         
        
         print_r($pettyboy);
         $pettyboy -> Status();
         $pettyboy ->Apresentar();
         
         $ufc01 = new Luta();
         $ufc01 ->marcarLuta($nerdaarts, $putscript);
         $ufc01 ->lutar();
         $pettyboy ->Status();
         $putscript ->Status();
         
        ?>
        </pre>
    </body>
</html>
