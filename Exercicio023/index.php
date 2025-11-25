<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
</head>
<body style="background-color: gray; font-family: sans-serif;">
    <h1>Olá, Mundo!</h1>

    <?php 
        require_once "./Pesssoa.php";

        $p1 = new Pessoa("Máquina", 23, "M");
        $p2 = new Pessoa("Odes", 24, "M");
        $p3 = new Pessoa("Maria", 34, "F");

        $p3->apresentar();
        $p3->criarConta(3333);
        $p3->apresentar();

        $p1->consultarConta();
        $p2->consultarConta();
        $p3->consultarConta();
        $p1->depositar(4000, $p3);
        $p3->consultarConta();

        $p3->transferir(3000, $p2);
        $p2->criarConta(2222);
        $p2->consultarConta();
        $p3->transferir(2500, $p2);
        $p2->consultarConta();
        $p3->consultarConta();
    ?>
</body>
</html>