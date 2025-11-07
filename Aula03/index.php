<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            
            $caneta1 = new Caneta;
            $caneta1->modelo = "BIC cristal";
            print_r($caneta1);
            $caneta1->tampar();
            $caneta1->rabiscar();
            $caneta1->destampar();
            $caneta1->rabiscar();
        ?>
    </body>
</html>
