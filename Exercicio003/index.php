<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03</title>
    </head>
    <body>
        <?php
            require_once './Telefone.php';
            
            $telefone1 = new Telefone();
            print_r($telefone1);
            $telefone1->ligar();
            $telefone1->ouvirMusica();
            $telefone1->fazerFoto();
            for($c = 1; $c < 60; $c++){
                $telefone1->carregar();
            }
            for($c = 1; $c < 15; $c++){
                $telefone1->fazerFoto();
            }
            $telefone1->status();
        ?>
    </body>
</html>
