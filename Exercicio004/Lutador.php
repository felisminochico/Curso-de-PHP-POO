<?php
class Lutador {
    private $nome;
    private $idade;
    private $nacionalidade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $empates;
    private $derrotas;
    private $sexo;
    
    public function __construct($no, $id, $na, $al, $pe, $vi, $em, $de, $se){
        $this->setNome($no);
        $this->setIdade($id);
        $this->setNacionalidade($na);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setEmpates($em);
        $this->setDerrotas($de);
        $this->setSexo($se);
    }
    

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }
    
    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(): void {
        if($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        }elseif($this->getPeso() <= 65.5){
            $this->categoria = "Leve";
        }elseif($this->getPeso() <= 90){
            $this->categoria = "Médio";
        }elseif($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }
    
    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    
    public function apresentar(){
        echo "<p>VAI ENTRAR NA ARENA! Lutador(a) {$this->getNome()} de {$this->getNacionalidade()} ";
        echo "que tem {$this->getIdade()} anos, já ganhou {$this->getVitorias()} vezes, perdeu {$this->getDerrotas()} vezes e ";
        echo "empatou {$this->getEmpates()} vezes.";
    }
    
    public function status(){
        echo "<br><br>STATUS: <strong>{$this->getNome()}</strong> <br>=======================<br>";
        echo "Idade: {$this->getIdade()} anos<br>";
        echo "Vitórias: {$this->getVitorias()}<br>";
        echo "Empates: {$this->getEmpates()}<br>";
        echo "Derrotas: {$this->getDerrotas()}<br>";
    }
    
    public function ganharLuta(){
        $this->setVitorias(($this->getVitorias() + 1));
    }
    
    public function perderLuta(){
        $this->setDerrotas(($this->getDerrotas() + 1));
    }
    
    public function empatarLuta(){
        $this->setEmpates(($this->getEmpates() + 1));
    }
}
