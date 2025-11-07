<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 05</title>
    </head>
    <body>
        <?php
            require_once './Tabuada.php';
            require_once "./Operadores.php";
            
            $tabuada1 = new Tabuada(4, 2, 10);
            print_r($tabuada1);
            $tabuada1->verTabuada();
            $tabuada1->setResolvida(false);
            $tabuada1->status();
            
            $calcular1 = new Operadores($tabuada1);
            $calcular1->somar();
            $tabuada1->verTabuada();
            $tabuada1->status();
        ?>
    </body>
</html>
