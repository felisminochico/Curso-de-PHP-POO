<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <?php 
        require_once "Alimentos.php";
        require_once "Vegetais.php";
        require_once "./Carnivoro.php";

        $v1 = new Vegetais();
        $v1->setNome("Tomate");
        $v1->apresentar();
        $c1 = new Carnivoro();
        $c1->setNome("Frango");
        $c1->apresentar();
    ?>
</body>
</html>