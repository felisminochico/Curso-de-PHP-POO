<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <h1>Olá, Mundo!</h1>
    <?php 
        require_once "./Mundo.php";
        require_once "./Continente.php";
        require_once "./Pais.php";

        $c1 = new Continente();
        $c1->setNome("África");
        $c1->setEspaco(254890);
        $c1->setTotalPessoas(2788);
        $c1->detalhes();

        $p1 = new Pais();
        $p1->setNome("Angola");
        $p1->setTotalMunicipios(154);
        $p1->setTotalPessoas(6329873);
        $p1->setTotalProvincias(18);
        $p1->setEspaco(1246700);
        $p1->detalhes();

        $p2 = new Pais();
        $p2->setNome("Brasil");
        $p2->setTotalMunicipios(210);
        $p2->setTotalProvincias(37);
        $p2->setTotalPessoas(12986743);
        $p2->setEspaco(15765888);
        echo "<br>";
        $p2->detalhes();
    ?>
</body>
</html>