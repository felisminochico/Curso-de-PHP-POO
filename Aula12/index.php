<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12</title>
    </head>
    <body>
        <?php
            require_once './Ave.php';
            require_once './Mamifero.php';
            require_once './Peixe.php';
            require_once './Reptil.php';
            require_once './Canguru.php';
            require_once './Cachorro.php';
            require_once './Tartaruga.php';
            require_once './Cobra.php';
            require_once './GoldFish.php';
            require_once './Arara.php';
            
            $mam1 = new Mamifero();
            $cang = new Canguru();
            $cach = new Cachorro();
            $tar = new Tartaruga();
            
            $mam1->locomover();
            $cach->locomover();
            $cang->locomover();
            
        ?>
    </body>
</html>
