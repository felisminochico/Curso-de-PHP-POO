<!DOCTYPE html>
<html lang="pt-ao">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02</title>
    </head>
    <body>
        <?php
            require_once './Caneta.php';
            $c1 = new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.6;
            $c1->tampada = true;
            $c1->carga = 40;
            $c1->modelo = "Felismino";
            
            print_r($c1);
             
            $c1->tampar();
            $c1->rabiscar();
            
            $c2 = new Caneta;
            $c2 ->cor = "Verde";
            $c2->ponta = 0.8;
            $c2->modelo = "Lenovo";
            $c2->carga = 80;
            
           echo "<br>";
           
           print_r($c2);
           $c2->destampar();
           $c2->rabiscar();
        ?>
    </body>
</html>
