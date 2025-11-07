<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once './Bolsista.php';
            
            $v1 = new Visitante();
            $aluno1 = new Aluno();
            $bolsista1 = new Bolsista();
            $v1->setNome("Mingo");
            $v1->setIdade(20);
            $v1->setSexo("Masculino");
            $aluno1->setNome("Kateia");
            $aluno1->setIdade(23);
            $aluno1->setSexo("Masculino");
            $aluno1->setCurso("Educação Moral e Cívica");
            $aluno1->fazerAniversario();
            $aluno1->pagarMensalidade();
            $bolsista1->setNome("Paulino");
            $bolsista1->setIdade(25);
            $bolsista1->setSexo("Masculino");
            $bolsista1->pagarMensalidade();
            
            print_r($v1);
            print_r($aluno1);
            print_r($bolsista1);
        ?>
        </pre>
    </body>
</html>
