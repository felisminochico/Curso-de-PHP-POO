<?php
require_once './AccoesVideo.php';

class Video implements AccoesVideo{
    private string $titulo;
    private int $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;
    
    public function __construct(string $titulo){
        $this->setTitulo($titulo);
        $this->avaliacao = 1;
        $this->setCurtidas(0);
        $this->setViews(0);
        $this->setReproduzindo(false);
    }
    
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAvaliacao(): int {
        return $this->avaliacao;
    }

    public function getViews(): int {
        return $this->views;
    }

    public function getCurtidas(): int {
        return $this->curtidas;
    }

    public function getReproduzindo(): bool {
        return $this->reproduzindo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function setAvaliacao(int $avaliacao): void {
        $media = ($this->getAvaliacao() + $avaliacao) / $this->getViews();
        $this->avaliacao = $media;
    }

    public function setViews(int $views): void {
        $this->views = $views;
    }

    public function setCurtidas(int $curtidas): void {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo(bool $reproduzindo): void {
        $this->reproduzindo = $reproduzindo;    
    }

    #[\Override]
    public function play() {
        if($this->getReproduzindo()){
            echo "<p>O Vídeo já está sendo Reproduzido.</p>";
        }elseif($this->getReproduzindo() === false || $this->getReproduzindo() === null){
            $this->setReproduzindo(true);
            echo "<p>Reproduzindo o Vídeo...</p>";
        }
    }
    
    #[\Override]
    public function pause(){
        if($this->getReproduzindo()){
            $this->setReproduzindo(false);
            echo "<p>Vídeo Pausado.</p>";
        }else{
            echo "<p>O Vídeo já está Pausado.</p>";
        }
    }
    
    #[\Override]
    public function like(){
        $this->setCurtidas(($this->getCurtidas() + 1));
    }
    
    #[\Override]
    public function detalhes(){
        echo "<h4>Detalhes do Vídeo: {$this->getTitulo()}</h4>";
        echo "Título: {$this->getTitulo()}<br>";
        echo "Curtidas: {$this->getCurtidas()}<br>";
        echo "Visulaizações: {$this->getViews()}<br>";
        echo "Avaliação: {$this->getAvaliacao()} Estrelas<br>";
        echo "Reproduzindo: ". ($this->getReproduzindo()?"Sim":"Não");
    }
}   
