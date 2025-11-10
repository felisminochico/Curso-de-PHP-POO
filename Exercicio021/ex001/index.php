<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede Social</title>
    <style>
        table{
            border-collapse: collapse;
            min-width: 260px;
        }

        caption{
            color: darkblue;
            font-weight: bold;
        }

        table, th, td{
            border: 1px solid black;
        }

        th, td{
            padding: 6px;
            text-align: center;
        }
    </style>
</head>
<body style="background-color: gray; font-family: sans-serif;">
    <h1>Ola, Mundo!</h1>

    <?php 
        require_once "./Pessoa.php";
        require_once "./RedeSocial.php";

        $p1 = new Pessoa("Felismino", 20, "M");
        $p2 = new Pessoa("Maria", 19, "F");
        $p3 = new Pessoa("Odes", 26, "M");
        $r1 = new RedeSocial("Facebook");
        $r2 = new RedeSocial("WhatsApp");

        $p1->detalhesPessoais();
        $r1->detalhesRedeSocial();

        $p1->criarConta($r1);
        $p2->criarConta($r2);
        $p1->criarConta($r1);
        $p2->criarConta($r2);

        $p1->acessarRede($r1);
        $p2->acessarRede($r2);
        $p1->acessarRede($r2);
        $p2->acessarRede($r1);
        $p3->acessarRede($r1);
        $p3->acessarRede($r2);

        $p1->consultarContas();

        $p1->enviarMensagem($r1, $p2, "Teste");
        $p2->criarConta($r1);
        $p1->enviarMensagem($r1, $p2, "Boa Tarde");

        $p2->consultarMensagens($r1);
        $p1->consultarMensagens($r1);   
        // $p3->consultarMensagens($r1);
        $p3->criarConta($r1);
        $p3->enviarMensagem($r1, $p2, "Sou Odes, Maria!");
        $p2->consultarMensagens($r1);
        $p3->consultarMensagens($r1);

        $r1->detalhesRedeSocial();

        $p1->criarConta($r2);
        $p3->enviarMensagem($r1, $p1, "Qualé, Wey?");
        $p1->consultarMensagens($r1);
        $p2->enviarMensagem($r2, $p1, "Tás bem, Mino?");
        $p1->consultarMensagens($r2);
        $p3->criarConta($r2);
        $p3->consultarMensagens($r2);
        $p1->enviarMensagem($r2, $p3, "Nengue Odes");
        $p3->consultarMensagens($r2);
        $p1->enviarMensagem($r1, $p2, "De novo");
        $p2->consultarMensagens($r1);
    ?>
</body>
</html>