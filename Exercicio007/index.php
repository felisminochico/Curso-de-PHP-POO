<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 07</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Continente.php';
            require_once './Pais.php';
            
            $c1 = new Continente();
            $p1 = new Pais();
            
            $c1->setNome("África");
            $c1->setEspaco(1456776.34);
            $c1->setTotalPessoas(6543876);
            $p1->setNome("Angola");
            $p1->setEspaco(1246700);
            $p1->setTotalPessoas(4987654);
            
            $c1->apresentar();
            $p1->apresentar();
            
            print_r($c1);
            print_r($p1);
        ?>
        </pre>
    </body>
</html>
