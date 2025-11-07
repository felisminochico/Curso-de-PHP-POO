<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once "./Carteira.php";
            $carteira1 = new Carteira;
            $carteira1->bolsos_internos = 6;
            $carteira1->cor = "Preta";
            $carteira1->tamanho = 30;
            $carteira1->valor_interno = 3000;
            print_r($carteira1);
            $carteira1->fecharCarteira();
            $carteira1->abrirCarteira();
            $carteira1->colocarDinheiro();
            $carteira1->colocarDinheiro();
            $carteira1->fecharCarteira();
            $carteira1->colocarDinheiro();
            $carteira1->abrirCarteira();
            $carteira1->colocarDinheiro();
        ?>
    </body>
</html>
