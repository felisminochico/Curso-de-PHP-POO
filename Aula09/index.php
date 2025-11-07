<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 09</title>
    </head>
    <body>
        <?php
            require_once './Pessoa.php';
            require_once './Livro.php';
            
            $pessoa1 = new Pessoa("Felismino", 20, "Masc");
            $pessoa2 = new Pessoa("Daniel Luís", 22, "Masc");
            $livro1 = new Livro("Fazer O Bem!", "Felismino Chico", 30);
            $livro2 = new Livro("Demon Slayer", "Zenitsu", 40);
            print_r($pessoa1);
            echo "<br>";
            print_r($livro1);
            $livro1->abrir();
            $livro1->avancarPagina(4);
            $livro1->detalhes($pessoa1);
            
            $livro2->abrir();
            $livro2->avancarPagina(6);
            $livro2->avancarPagina(30);
            $livro2->fechar();
            $livro2->folhear();
            $livro2->detalhes($pessoa2);
            echo "<br>";
        ?>
    </body>
</html>
