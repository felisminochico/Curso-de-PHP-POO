<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'ContaBanco.php';
            
            $conta1 = new ContaBanco(9550, "CC", "Jubileu");
            $conta1->abrirConta();
            $conta1->depositar(830);
            $conta1->abrirConta();
            $conta1->sacar(400);
            $conta1->pagarMensal();
            print_r($conta1);
            $conta1->sacar(500);
            print("Saldo da Conta 1: ". $conta1->getSaldo());
            $conta1->apresentacao();
            $conta1->fecharConta();
            
            echo "<br>";
            
            $conta2 = new ContaBanco(9551, "CP", "Creuza");
            $conta2->abrirConta();
            $conta2->abrirConta();
            $conta2->depositar(200);
            $conta2->sacar(50);
            $conta2->pagarMensal();
            print_r($conta2);
            print("Saldo da Conta 2: ". $conta2->getSaldo());
            echo "<br> Número de Conta é ". $conta2->getNumConta();
            $conta2->apresentacao();
            $conta2->fecharConta(); 
        ?>
    </body>
</html>
