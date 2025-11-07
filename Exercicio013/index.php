<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <h1>Olá, Mundo!</h1>

    <pre>
    <?php 
        require_once "./Dono.php"; require_once "./Visita.php";
        require_once "./casa.php";

        $dono1 = new Dono("Felismino", 20, "Masculino");
        $dono2 = new Dono("Domingos", 27, "Masculino");
        $dono3 = new Dono("Manuela", 36, "Feminina");
        $visita1 = new Visita("Máquina", 22, "Masculino");
        $visita2 = new Visita("Carla", 28, "Feminina");
        $visita3 = new Visita("João", 18, "Masculino");
        $casa1 = new Casa("Casa Nº 142");
        $casa2 = new Casa("Casa Nº 145");
        $casa3 = new Casa("Casa Nº 178");
        // print_r($dono1);
        // print_r($visita1);

        $dono1->detalhes();
        $dono1->comprarCasa($casa1);
        $visita1->entrarVisita($casa1);
        $dono1->entrar();
        $visita1->entrarVisita($casa1);
        
        $dono1->ligarTV();
        $visita1->ligarTV();
        $dono1->detalhes();

        $dono3->comprarCasa($casa3);
        $dono1->comprarCasa($casa3);
        $visita1->entrarVisita($casa3);
        $dono3->entrar();
        $visita2->entrarVisita($casa3);
        $dono3->dormir();
        $dono3->acordar();
        $visita2->sair();
        $visita2->ligarTV();
        $visita2->entrarVisita($casa3);
        // $visita2->ligarTV();
        $dono3->ligarTV();
        $visita2->ligarTV();
        $dono3->assistir();
        $dono3->detalhes();
        // // $dono2->comprarCasa($casa1);
        // // $casa1->setDono($dono2);
        
    ?>
    </pre>
</body>
</html>