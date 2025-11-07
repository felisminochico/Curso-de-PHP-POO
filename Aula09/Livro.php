<?php
require_once './Pessoa.php';
require_once './Publicacao.php';

class Livro implements Publicacao{
    private string $titulo;
    private string $autor;
    private int $totalPaginas;
    private int $paginaAtual;
    private bool $aberto;
    private Pessoa $leitor;
    
    public function __construct(string $titulo, string $autor, int $totalPaginas) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotalPaginas($totalPaginas);
        $this->setPaginaAtual(0);
        $this->setAberto(false);
    }
    
    private function getTitulo(): string {
        return $this->titulo;
    }

    private function getAutor(): string {
        return $this->autor;
    }

    private function getTotalPaginas(): int {
        return $this->totalPaginas;
    }

    private function getPaginaAtual(): int {
        return $this->paginaAtual;
    }

    private function getAberto(): bool {
        return $this->aberto;
    }

    private function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    private function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    private function setTotalPaginas(int $totalPaginas): void {
        $this->totalPaginas = $totalPaginas;
    }

    private function setPaginaAtual(int $paginaAtual): void {
        $this->paginaAtual = $paginaAtual;
    }

    private function setAberto(bool $abaerto): void {
        $this->aberto = $abaerto;
    }
    
    public function detalhes(Pessoa $leitor){
        if($this->getAberto()){
            echo "<p>STATUS DO LIVRO: Aberto <br> =======================</p>";
            echo "O Livro: {$this->getTitulo()} tem {$this->getTotalPaginas()} páginas, ";
            echo "atualmente está na página {$this->getPaginaAtual()} e está sendo lido por {$leitor->getNome()}";
        }else{
            echo "<p>STATUS DO LIVRO: Fechado <br> =======================</p>";
            echo "O Livro {$this->getTitulo()} tem {$this->getTotalPaginas()} páginas, ";
            echo "não está sendo lido porque está fechado.";
        }
    }
    
    #[\Override]
    public function abrir(){
        $this->setAberto(true);
        echo "<p>Livro aberto com sucesso!</p>";
    }
    
    #[\Override]
    public function fechar(){
        $this->setAberto(false);
        echo "<p>Livro fechadoo com sucesso!</p>";
    }
    
    #[\Override]
    public function folhear(){
        $this->setAberto(true);
        $valor = random_int(0, $this->getTotalPaginas());
        $this->setPaginaAtual($valor);
    }
    
    #[\Override]
    public function avancarPagina(int $avan) {
        if($this->getAberto()){
            if($avan > $this->getTotalPaginas()){
                $this->setPaginaAtual($this->getTotalPaginas());
                echo "<br>ERRO: Página não encontrada!";
            }else if($this->getPaginaAtual() + $avan > $this->getTotalPaginas()){
                $this->setPaginaAtual($this->getTotalPaginas());
                echo "<br>ERRO: Página não encontrada!";
            }else{
             $this->setPaginaAtual(($this->getPaginaAtual() + $avan));   
            }
        }else{
            echo "<p>ERRO: Impossível Avançar Página! O Livro está fechado";
        }
    }
    
    #[\Override]
    public function voltarPagina(int $voltar) {
        if($this->getAberto()){
            if($voltar > $this->getPaginaAtual()){
                $this->setPaginaAtual(0);
                echo "<br>ERRO: Página não encontrada!";
            }else{
                $this->setPaginaAtual($this->getPaginaAtual() - $voltar);
            }
        }else{
            echo "<p>ERRO: Impossível Voltar Página! O Livro está fechado";
        }
    }
}