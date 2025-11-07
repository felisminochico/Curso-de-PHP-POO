<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
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
        require_once "./Cliente.php";
        require_once "./ContaBanco.php";
        require_once "./Loja.php";

        $cliente = [];
        $cliente[0] = new Cliente("Felismino", 20, "Masculino");
        $cliente[0]->apresentar();
        $cliente[0]->detalhesPessoais();
        $cliente[0]->detalhesConta();
        $cliente[0]->criarContaBanco(1111);
        $cliente[0]->detalhesPessoais();
        $cliente[0]->detalhesConta();
        $cliente[1] = new Cliente("Maria", 19, "Feminino");
        $cliente[1]->detalhesPessoais();
        $cliente[1]->detalhesConta();
        $cliente[1]->levantar(500);
        $cliente[1]->consultar();
        $cliente[1]->transferir($cliente[0], 3000);
        $cliente[0]->transferir($cliente[1], 5000);
        $cliente[0]->consultar();
        $cliente[1]->criarContaBanco(2222);
        $cliente[1]->detalhesPessoais();
        $cliente[1]->detalhesConta();
        $cliente[1]->consultar();
        $cliente[0]->depositar($cliente[0], 3000);
        $cliente[0]->transferir($cliente[1], 2000);
        $cliente[0]->detalhesConta();
        $cliente[0]->consultar();
        $cliente[1]->detalhesConta();
        $cliente[1]->consultar();
        $mino = new ContaBanco($cliente[1], 222);
        $conta1 = new ContaBanco($cliente[0], 3333);
        $cliente[0]->criarContaBanco(4444);
        $loja1 = new Loja("Yatumba");
        print_r($loja1);
        $loja1->adicionarProdutos("Massa", 6, 400);
        $loja1->adicionarProdutos("Arroz", 10, 1100);
        $loja1->adicionarProdutos("Óleo", 20, 2400);
        $cliente[1]->comprarProduto(0, 2, $loja1);
        $cliente[1]->comprarProduto(1, 1, $loja1);
        $cliente[1]->depositar($cliente[0], 10000);
        $cliente[0]->detalhesConta();
        $cliente[0]->comprarProduto(0, 3, $loja1);
        $cliente[0]->detalhesConta();
        $cliente[1]->detalhesConta();
        $cliente[1]->comprarProduto(2, 3, $loja1);
        $cliente[0]->transferir($cliente[1], 9000);
        $cliente[0]->detalhesConta();
        $cliente[1]->consultar();
        $cliente[1]->comprarProduto(2, 3, $loja1);
        $cliente[1]->consultar();

        $cliente[2] = new Cliente("Madalena", 29, "Feminina");
        $cliente[2]->criarContaBanco(6666);
        $cliente[1]->transferir($cliente[2], 900);
        $cliente[2]->comprarProduto(0, 1, $loja1);
        $cliente[2]->detalhesConta();
        $cliente[1]->detalhesConta();
        $cliente[1]->comprarProduto(0, 1, $loja1);
        $loja1->detalhes();
    ?>
</body>
</html>