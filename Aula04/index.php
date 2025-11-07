<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once "Caneta.php";
            
            //$c1 = new Caneta();
            //$c1->setModelo("BIC Cristal");
            //$c1->setPonta(0.5);
            
            //echo '<p>Eu tenho uma Caneta de modelo '. $c1->getModelo(). ' e a ponta '. $c1->getPonta(). '</p>';
            $c1 = new Caneta("Chico", "Vermelho", 0.7);
            $c2 = new Caneta('Felismino', 'Azul', 0.4);
            
            foreach($c1 as $cont){
                echo "$cont ";
            }
            
            print_r($c1);
            print_r($c2);
        ?>
    </body>
</html>
