<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
    <style>
        body{
            background-color: gray;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Olá, Mundo!</h1>
    <?php 
        require_once "./Pessoa.php";

        $p1 = new Pessoa('Felismino', "Masculino", 20);
        $p1->corCabelo;
        $p1->falar();
        $p1->corPele = "Preto";
        
        $nome = "Felismino";
        const idade = 20;

        unset($nome);
        // echo $nome ?? "Não existe";

        isset($p1->idade);
        unset($p1->idade);

        echo $p1;

        $p1();

        var_dump($p1);
        
    ?>
</body>
</html>