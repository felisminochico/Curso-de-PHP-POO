<?php 
    require_once "./Pessoa.php";

    class Administrador extends Pessoa{

        public function __construct(string $nome, int $idade, string $sexo){
            parent::__construct($nome, $idade, $sexo);
        }

        public function removerUsuario(Pessoa $usuario){
            
        }
    }
?>