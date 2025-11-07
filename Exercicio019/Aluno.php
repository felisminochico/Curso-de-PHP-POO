<?php 
    require_once "./Pessoa.php";

    final class Aluno extends Pessoa{
        private bool $cadastrado;
        private int $numero;
        private string $curso;

        public function __construct(string $nome, int $idade, string $sexo){
            parent::__construct($nome, $idade, $sexo);
            $this->setCadastrado(false);
            $this->setNumero(0);
            $this->setCurso("Sem Curso");
        }

        public function getCadastrado(): bool{
            return $this->cadastrado;
        }

        public function setCadastrado(bool $cadastrado): void{
            $this->cadastrado = $cadastrado;
        }

        public function getNumero(): int{
            return $this->numero;
        }

        public function setNumero(int $numero): void{
            $this->numero = $numero;
        }

        public function getCurso(): string{
            return $this->curso;
        }

        public function setCurso(string $curso): void{
            $this->curso = $curso;
        }

        public function detalhes(){
            echo("<h4>Detalhes do Aluno</h4>");
            echo("<p>Nome: {$this->getNome()}</p>");
            echo("<p>Idade: {$this->getIdade()}</p>");
            echo("<p>Sexo: ". ($this->getSexo() === "M" ? "Masculino" : "Feminino"). "</p>");
            echo("<p>Cadastrado: ". ($this->getCadastrado() === true ? "Sim" : "Não"). "</p>");
            echo("<p>Número: {$this->getNumero()}</p>");
            echo("<p>Curso: {$this->getCurso()}</p>");
        }
    }
?>