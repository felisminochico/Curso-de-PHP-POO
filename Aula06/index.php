<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './ControleRemoto.php';
            
            $controlador1 = new ControleRemoto();
            
            print_r($controlador1);
            $controlador1->ligar();
            $controlador1->play();
            for($c = 0; $c < 20; $c++){
                $controlador1->aumentarVolume();
            }
            for($c = 0; $c < 30; $c++){
                $controlador1->diminuirVolume();
            }
            $controlador1->ligarMudo();
            for($c = 0; $c < 20; $c++){
                $controlador1->aumentarVolume();
            }
            $controlador1->desligar();
            $controlador1->abrirMenu();
        ?>
    </body>
</html>
