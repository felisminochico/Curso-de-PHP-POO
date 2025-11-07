<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once './Aluno.php';
            require_once './Professor.php';
            require_once './Funcionario.php';
            
            $pessoa1 = new Pessoa();
            $pessoa2 = new Aluno();
            $pessoa3 = new Professor();
            $pessoa4 = new Funcionario();
            
            $pessoa1->setNome("Mingo");
            $pessoa2->setNome("Felismino");
            $pessoa3->setNome("Maria");
            $pessoa4->setNome("Danaiel");
            
            $pessoa1->setIdade(20);
            $pessoa2->cancelarMatricula();
            $pessoa3->setSalario(4600);
            $pessoa3->aumentarSalario(3880.34);
            $pessoa4->setTrabalhando(true);
            $pessoa4->mudarTrabalho();
            $pessoa4->mudarTrabalho();
            
            print_r($pessoa1);
            print_r($pessoa2);
            print_r($pessoa3);
            print_r($pessoa4);
        ?>
        </pre>
    </body>
</html>
