<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Final</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Gafanhoto.php';
            require_once './Pessoa.php';
            require_once './Video.php';
            require_once './Visualizacao.php';
            
            $v = range(1, 3, 1);
            
            $v[1] = new Video("Aula de PHP");
            $v[2] = new Video("Aula de Java");
            $v[3] = new Video("Aula de JavaScript");
            $visu1 = new Visualizacao();
            
            $g[1] = new Gafanhoto("Felismino", 20, "M", "Felismino");
            $g[2] = new Gafanhoto("Maria", 18, "F", "Mariela");
            
            $v[3]->detalhes();
            $visu1->visualizar($g[1], $v[3]);
            $visu1->avaliarNota(7);
            $visu1->visualizar($g[1], $v[1]);
            $visu1->avaliar(88);
            $visu1->avaliarPorcentagem(40);
            print_r($g[1]);
            print_r($v[3]);
            print_r($v[1]);
        ?>
    </pre>
    </body>
</html>
