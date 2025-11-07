<?php
class Lutador {
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;
    
    public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }
    
    private function getNome(): string {
        return $this->nome;
    }

    private function getNacionalidade(): string {
        return $this->nacionalidade;
    }

    private function getIdade(): int {
        return $this->idade;
    }

    private function getAltura(): float {
        return $this->altura;
    }

    private function getPeso(): float {
        return $this->peso;
    }

    private function getCategoria(): string {
        return $this->categoria;
    }

    private function getVitorias(): int {
        return $this->vitorias;
    }

    private function getDerrotas(): int {
        return $this->derrotas;
    }

    private function getEmpates(): int {
        return $this->empates;
    }

    private function setNome(string $nome): void {
        $this->nome = $nome;
    }

    private function setNacionalidade(string $nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    private function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    private function setPeso(float $peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(): void {
        if($this->getPeso() < 52.3){
            $this->categoria = "Inválido";
        }elseif($this->getPeso() <= 60){
            $this->categoria = "Leve";
        }elseif($this->getPeso() <= 90){
            $this->categoria = "Médio";
        }elseif($this->getPeso() < 120){
            $this->categoria = "Pesado";
        }
    }

    private function setVitorias(int $vitorias): void {
        $this->vitorias = $vitorias;
    }

    private function setDerrotas(int $derrotas): void {
        $this->derrotas = $derrotas;
    }

    private function setEmpates(int $empates): void {
        $this->empates = $empates;
    }

    public function apresentar(){
        echo "<h2>Apresentação</h2>";
        echo "<p>Lutador: {$this->getNome()}</p>";
        echo "<p>Origem: {$this->getNacionalidade()}</p>";
        echo "<p>Idade: {$this->getIdade()} anos</p>";
        echo "<p>Altura: {$this->getAltura()} metros</p>";
        echo "<p>Peso: {$this->getPeso()} Kg</p>";
        echo "<p>Categoria: {$this->getCategoria()}</p>";
        echo "<p>Ganhou: {$this->getVitorias()} lutas</p>";
        echo "<p>Perdeu: {$this->getDerrotas()} lutas</p>";
        echo "<p>Empatou: {$this->getEmpates()} lutas</p>";
    }
    
    public function status(){
        echo "<p>Status: {$this->getNome()} <br> =============</p>";
        echo "<p>É um Peso {$this->getCategoria()}</p>";
        echo "<p>{$this->getVitorias()} Vitórias</p>";
        echo "<p>{$this->getDerrotas()} Derrotas</p>";
        echo "<p>{$this->getEmpates()} Empates</p>";
    }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}
