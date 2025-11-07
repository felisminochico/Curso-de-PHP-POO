<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <style>
        body{
            background-color: gray;
            font-family: sans-serif;
        }

        table{
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid black;
        }

        caption{
            font-weight: bold;
            color: darkblue;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Alunos</h1>

    <?php 
        require_once "./Aluno.php";
        require_once "./Turma.php";

        $a1 = new Aluno("Felismino", 20, "M");
        $a2 = new Aluno("Máquina", 29, "M");
        $a3 = new Aluno("Maria", 19, "F");
        $a4 = new Aluno("Madalena", 25, "F");
        $a5 = new Aluno("José", 30, "M");
        $a6 = new Aluno("Emília", 18, "F");
        $a7 = new Aluno("Marcos", 40, "M");
        $t1 = new Turma("A", "Informática");
        $t2 = new Turma("B", "Ciências da Computação");
        $t3 = new Turma("C", "Electricidade");

        $t1->cadastrar($a1);
        $t1->cadastrar($a3);
        $t1->cadastrar($a6);
        $t2->cadastrar($a2);
        $t2->cadastrar($a4);
        $t2->cadastrar($a5);

        $t1->detalhes();
        $t2->detalhes();

        $t2->atualizar($a5, "André Coelho", 21);

        $t1->consultar();
        $t2->consultar();

        $t1->atualizar($a3, "Joana", 26);
        $t1->consultar();

        $a5->detalhes();
        $a6->detalhes();

        $t2->remover(1);
        $t2->consultar();
    ?>
</body>
</html>