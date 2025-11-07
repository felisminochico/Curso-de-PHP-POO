<?php

abstract class Desenvolvedor{
    private string $nome;
    private int $idade;
    private string $sexo;
    private string $categoria;
    private string $tipoDev;
    protected array $linguagens;
    protected int $configurado;
    
    public function __construct(string $nome, int $idade, string $sexo){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->configurado = 0;
    }
    
    protected function getNome(): string {
        return $this->nome;
    }

    protected function getIdade(): int {
        return $this->idade;
    }

    protected function getSexo(): string {
        return $this->sexo;
    }

    protected function getCategoria(): string {
        return $this->categoria;
    }

    protected function getLinguagens(): array {
        return $this->linguagens;
    }
    
    protected function getTipo(): string {
        return $this->tipoDev;
    }
    
    protected function getConfigurado(): int{
        return $this->configurado;
    }

    protected function setNome(string $nome): void {
        $this->nome = $nome;
    }

    protected function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    protected function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }

    protected function setCategoria(string $categoria): void {
        $this->categoria = $categoria;
    }

    protected function setTipo(string $tipo): void {
        $this->tipoDev = $tipo;
    }
    
    protected function setConfigurado(int $config): void {
        $this->configurado = $config;
    }
    
    protected function setLinguagens(array $linguagens): void {
       $this->linguagens = $linguagens;
    }

    public function apresentar(){
        if($this->getConfigurado() == 2){
            echo "<p>Olá, me chamo {$this->getNome()}! Sou um(a) Desenvolvedor(a) {$this->getTipo()} na categoria {$this->getCategoria()}";
            echo ", tenho {$this->getIdade()} anos de idade e trabalho com linguagens: ";
            foreach($this->getLinguagens() as $c){
                echo "$c ";
            }
            echo "</p>";
        }else{
            echo "<p><strong>ERRO: </strong>Impossível apresentar-se! Usuário não configurado.</p>";
        }
        
    }
}