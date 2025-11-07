<?php 
    require_once "./Telefone.php";

    class Pessoa{
        private string $nome;
        private int $idade;
        private string $sexo;
        private Telefone $tel;

        public function __construct(string $nome, int $idade, string $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getIdade(): int{
            return $this->idade;
        }

        public function setIdade(int $idade): void{
            $this->idade = $idade;
        }

        public function getSexo(): string{
            return $this->sexo;
        }

        public function setSexo(string $sexo): void{
            $this->sexo = $sexo;
        }

        public function usarTelefone(Telefone $tel){
            echo("<p>".$this->getNome(). " está usando o Telefone de Modelo <strong>{$tel->getModelo()}</strong></p>");
        }

        public function mudarModelo(Telefone $tel, string $novoModelo){
            $this->tel = $tel;
            $this->tel->setModelo($novoModelo);
            echo("O Modelo foi mudado para <strong>". $this->tel->getModelo(). "</strong>");
        }
    }
?>