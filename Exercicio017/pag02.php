<?php 
    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        echo("ERRO: Página não acessada via formulário.");
        die();
    }
?>

<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
    <style>
        body{
            background-color: gray;
            font-family: sans-serif;
        }
    </style>
 </head>
<body>
    <?php 
        $ver_nome = $_POST["nome"];
        // $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)?$_POST["idade"]:"ERRO";
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)?$_POST["email"]:"Formato Inválido";
        $nome = strip_tags($_POST["nome"]);
        echo ("O nome do usuário é $nome, a idade é $idade e o Email é $email <br>");
        // echo($_SERVER["HTTP_ACCEPT_LANGUAGE"]."");
    ?>
</body>
</html>