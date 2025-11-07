<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13</title>
    </head>
    <body>
        <?php
            require_once './Mamifero.php';
            require_once './Lobo.php';
            require_once './Cachorro.php';
            
            $m1 = new Mamifero();
            $l1 = new Lobo();
            $c1 = new Cachorro();
            
            $m1->emitirSom();
            $l1->emitirSom();
            $c1->emitirSom();
            $c1->reagirDono("Felismino");
            $c1->reagirFrase("Toma comida");
            $c1->reagirHora(18);
            $c1->reagirIdadePeso(3, 8)
        ?>
    </body>
</html>
