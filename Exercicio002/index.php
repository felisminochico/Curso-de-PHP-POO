<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './Conta.php';
            
            $conta1 = new Conta(5000, "Felismino Chico", "399471", 943136535, "004000006041396510186");
            
            print_r($conta1);
            
            $conta1->setDepositarSaldo(3500);
            echo "<p>Saldo da conta ". number_format($conta1->getSaldo(), 2, ",", "."). "</p>";
            echo "<p>Nome da Conta: {$conta1->getNomeConta()}</p>";
            $conta1->setRetirarSaldo(8000);
            echo "<p>Saldo da Conta: {$conta1->getSaldo()}</p>";
            echo "<p>A senha da minha conta é {$conta1->getsenha()}";
            $conta1->setSenha("399471", "123456");
            echo "<p>A senha da minha conta é {$conta1->getsenha()}";
            $conta1->setSenha("123456", "222222");
            echo "<p>A Senha da Conta é {$conta1->getSenha()}";
            echo "<p>O Número de Conta é {$conta1->getNumeroConta()}";
            echo "<p>O IBAN da Conta é {$conta1->getIban()}";
        ?>
    </body>
</html>
