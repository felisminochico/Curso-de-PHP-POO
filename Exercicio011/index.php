<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>
<body>
    <h1>Conta do Banco</h1>
    <?php 
        require_once "./ContaBanco.php";

        $conta1 = new ContaBanco("Felismino", 4600);
        $conta1->consultar();
        $conta1->depositar(12000);
        $conta1->consultar();
        $conta1->levantar(30000);
        $conta1->levantar(8400);
        $conta1->consultar()
    ?>
</body>
</html>