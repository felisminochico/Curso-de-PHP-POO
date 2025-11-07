<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
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
        require_once "./Telefone.php";

        $p1 = new Pessoa("Felismino", 28, "Masculino");
        $p2 = new Pessoa("Maria", 19, "Feminino");
        $t1 = new Telefone("Galaxy S23 Ultra");
        $t2 = new Telefone("Apple 17 Pro Max");

        $p1->usarTelefone($t2);
        $p1->usarTelefone($t1);
        $p2->usarTelefone($t2);
        $p1->mudarModelo($t2, "Xiaomi Pro");
        $p2->usarTelefone($t2);

        $t1->criarVisor(20);
        $t1->pegarTamanhoVisor();
        
    ?>
</body>
</html>