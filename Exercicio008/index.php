<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 08</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Web.php';
            require_once './FrontEnd.php';
            require_once './BackEnd.php';
            require_once './FullStack.php';
            require_once './Mobile.php';
            
            $devWeb1 = new Web("Felismino", 20, "Masculino");
            $frontend1 = new FrontEnd('Madalena', 25, "Feminino");
            $backend1 = new BackEnd("Máquina", 22, "Masculino");
            $fullsatck1 = new FullStack("Odes", 28, "Masculino");
            $mobile1 = new Mobile("Isabel", 32, "Feminino");
            
            $devWeb1->apresentar();
            $devWeb1->configurarTipo();
            $backend1->configurarTipo();
            $backend1->configurarCategoria();
            $backend1->configurarLiguagens();
            $backend1->apresentar();
            $frontend1->configurarTipo();
            $frontend1->configurarCategoria();
            $frontend1->configurarLiguagens();
            $frontend1->apresentar();
            $fullsatck1->configurarCategoria();
            $fullsatck1->configurarLiguagens();
            $fullsatck1->configurarTipo();
            $fullsatck1->apresentar();
            $mobile1->configurarCategoria();
            $mobile1->configurarLiguagens();
            $mobile1->configurarTipo();
            $mobile1->apresentar();
            
            print_r($devWeb1);
            print_r($frontend1);
            print_r($backend1);
            print_r($fullsatck1);
            print_r($mobile1);
        ?>
        </pre>
    </body>
</html>
