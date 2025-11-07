<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Olá, Mundo!</h1>

    <?php 
        require_once "./Jogos.php";
        require_once "./Pessoa.php";

        $j1 = new Jogos("God of War");
        $j2 = new Jogos("Mortal Kombat 9");
        $p1 = new Pessoa("Felismino", 20);
        $p2 = new Pessoa("Maria", 26);

        $j1->detalhes($p1);
        $j1->detalhes($p2);
        $j2->detalhes($p1);
        $j2->detalhes($p2);
    ?>
</body>
</html>