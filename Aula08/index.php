<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 08</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            $lutador1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $lutador2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $lutador3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $lutador4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $lutador5 = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $lutador6 = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            
            print_r($lutador1);
            echo '<br>';
            echo '<br>';
            print_r($lutador2);
            echo '<br>';
            echo '<br>';
            print_r($lutador3);
            echo '<br>';
            echo '<br>';
            print_r($lutador4);
            echo '<br>';
            echo '<br>';
            print_r($lutador5);
            echo '<br>';
            echo '<br>';
            print_r($lutador6);
            
            $luta01 = new Luta();
            $luta01->marcarLuta($lutador1, $lutador3);
            $luta01->lutar();
            $lutador1->status();
            $lutador3->status();
            
            echo "{$lutador1->getVitorias()}";
            
        ?>
    </body>
</html>
