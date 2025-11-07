<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade</title>
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
        require_once './Pessoa.php';
        require_once "./Usuario.php";
        require_once './RedeSocial.php';

        $p1 = new Pessoa("Máquina", 23, "M");
        $p2 = new Pessoa("Maria", 27, "F");
        $p3 = new Pessoa("Madalena", 18, "F");
        $p4 = new Pessoa("Odes", 23, "M");
        $r1 = new RedeSocial('Facebook');
        $r2 = new RedeSocial("WhatsApp");

        $p1->criarConta($r1);
        $p2->criarConta($r1);
        $p1->getConta()->enviarMensagem($p2, "Boa tarde");
        $p1->getConta()->verMensagens();
        $p3->criarConta($r1);
        $p4->criarConta($r1);
        $p3->getConta()->enviarMensagem($p2, "Oi, amiga! Tudo bem?");
        $p4->getConta()->enviarMensagem($p2, "Estou te esperando...");
        $p2->getConta()->verMensagens();
        $p2->getConta()->enviarMensagem($p1, "Boa tarde, Máquina!");
        $p1->getConta()->verMensagens();
        $p1->getConta()->enviarMensagem($p2, "Tudo bem por aí, Maria?");
        $p2->getConta()->verMensagens()
    ?>
</body>
</html>