<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body style="background-color: gray; font-family: sans-serif;">
    <h1>Olá, Mundo!</h1>

    <?php 
        require_once "./Pessoa.php";

        $p1 = new Pessoa("Felismino", 20);
        $p2 = new Pessoa("Máquina", 22);

        $p1->apresentar();
        $p2->apresentar();

        $p1->fazerAniversario(7);

        $vetor = [4, 8, 5, 2, 9];

        $teste = array_filter($vetor, function($valor){
            return $valor >= 5;
        });

        $teste2 = array_map(function($valor){
            return $valor += 10;
        }, $vetor);

        $teste3 = array_reduce($vetor, function($acc, $valor){
            return $acc += $valor;
        });

        $teste4 = array_sum($vetor);
        $teste5 = array_values($teste2);
        $teste2[2] = 20;

        $teste6 = array_search(2, $vetor);
        $teste7 = array_slice($vetor, 1, 3);
        $teste8 = array_splice($vetor, 2, 2);
        $teste9 = array_pad($teste2, 7, "M");

        // $nome = ;

        echo $nome ?? ucfirst("desconhecido");
        echo "<br>";
        echo empty($nome) ? "Vazio" : strtoupper($nome);
        echo "<br>";
        echo isset($nome) ? strtolower($nome) : "Não configurado";
        echo "<br>";
        print_r($teste9);

        $teste10 = $p1->toArray();
        echo "<br>";
        print_r($teste10);
        
        foreach($teste10 as $chave => $conteudo){
            echo "<p>". ucfirst($teste10[$chave]). ": $conteudo </p>";
        }
    ?>
</body>
</html>