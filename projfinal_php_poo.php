<!DOCTYPE html>
<!--
Este é o projeto final do curso em video do gustavo guanabara onde ultilizo todos
conhecimentos adquiridos no curso.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO EM VIDEO PHP POO</title>
    </head>
    <pre>
    <body>
        <?php
        require_once './projfinal_videos.php';
        require_once './projfinal_gafanhotos.php';
        require_once './Visualizacao.php';
        
        $video01 = new Videos("videos de PHP", 0);
        $video02 = new Videos("Videos de java", 0);
        $video03 = new Videos("videos de Python", 0);
        $gafa01 = new Gafanhotos("jubileu", 23, "m", "1234");
        $gafa02 = new Gafanhotos("veronica", 33, "f", "1235");
        $visu01 = new Visualizacao($gafa01, $video03);
        $visu01 ->avaliar();
        
        print_r($video03);
        print_r($video02);
        print_r($video01);
        var_dump($visu01);
        ?>
        
    </body>
    </pre>
</html>
