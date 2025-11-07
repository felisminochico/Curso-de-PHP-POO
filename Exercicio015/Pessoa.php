<?php 
    class Pessoa{
        private string $nome;
        public string $sexo;
        private int $idade;

        public function __construct(string $nome, string $sexo, int $idade){
            $this->setNome($nome);
            $this->setSexo($sexo);
            $this->setIdade($idade);
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getSexo(): string{
            return $this->sexo;
        }

        public function setSexo(string $sexo): void{
            $this->sexo = $sexo;
        }

        public function getIdade(): int{
            return $this->idade;
        }

        public function setIdade(int $idade): void{
            $this->idade = $idade;
        }

        public function __destruct(){
            echo("<p>Objeto Destruído</p>");
        }

        public function __get($atributo){
            echo("<p>ERRO: O atributo {$atributo} não existe.");
        }

        public function __set($atributo, $valor){
            echo("<p>ERRO: Tentativa de atribuição inexistente ao atributo $atributo com valor $valor</p>");
        }

        public function __call($metodo, $args){
            echo("<p>ERRO: O método $metodo não existe com total de argumentos: ". count($args));
        }

        public function __isset($atributo){
            echo "<p>O atributo $atributo é inacessível ou inexistente</p>";
        }

        public function __unset($atributo){
            echo("<p>Impossível eliminar o atributo $atributo. É inexistente ou inacessível</p>");
        }

        
        public function __toString(){
            return ("<p>Objeto Convertido para String. Nome: {$this->nome} Idade: {$this->idade}");
        }

        public function __invoke(){
            echo("<p>ERRO: Não podes chamar o Objeto como se fosse uma função.</p>");
        }

        public function __debugInfo(){
            echo("<p>Nome: {$this->nome} Idade: Privada Sexo: Privado");
        }
    }
?>