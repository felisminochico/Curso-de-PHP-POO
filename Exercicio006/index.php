<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 06</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Animal.php';
            require_once './Cachorro.php';
            require_once './Gato.php';
            
            $animal1 = new Animal();
            $gato1 = new Gato();
            $cão1 = new Cachorro();
            
            $animal1->setNome("Mosca");
            $gato1->setNome("Maria");
            $gato1->setTrepar(false);
            $gato1->treparG();
            $gato1->miar();
            $cão1->setNome("João");
            $cão1->setPau(true);
            $cão1->buscarPau();
            $cão1->ladrar();
            
            print_r($animal1);
            print_r($cão1);
            print_r($gato1);
        ?>
        </pre>
    </body>
</html>
