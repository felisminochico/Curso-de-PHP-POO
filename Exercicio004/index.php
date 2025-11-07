<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 04</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once "./Luta.php";
            
            $h = array();
            $m = array();
            $h[0] = new Lutador("Mingo", 31, "França", 1.75, 68.9, 11, 2, 1, "Masc");
            $h[1] = new Lutador("Dani", 29, "Brasil", 1.68, 57.8, 14, 3, 2, "Masc");
            $h[2] = new Lutador("Joaquim", 35, "EUA", 1.65, 80.9, 12, 1, 2, "Masc");
            $h[3] = new Lutador("Kateia", 28, "Austrália", 1.93, 81.6, 13, 2, 0, "Masc");
            $h[4] = new Lutador("Maestro", 37, "Brasil", 1.70, 119.3, 5, 3, 4, "Masc");
            $h[5] = new Lutador("Idinho", 30, "EUA", 1.81, 105.7, 12, 4, 2, "Masc");
            
            for($c = 0; $c < count($h); $c++){
                print_r($h[$c]);
                echo "<br>";
                echo "<br>";
            }
            
            $luta1 = new Luta();
            $luta1->marcarLuta($h[4], $h[5]);
            $luta1->lutar();
            $h[4]->status();
            $h[5]->status();
            
        ?>
    </body>
</html>
