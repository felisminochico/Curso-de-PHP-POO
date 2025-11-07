<?php 
    class Loja{
        private string $nome;
        private array $produtos = [];
        private array $precos = [];
        private array $quantidades = [];

        public function __construct(string $nome){
            $this->setNome($nome);
            $this->produtos = [];
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getProdutos(): array{
            return $this->produtos;
        }

        public function setProdutos(array $produtos): void{
            $this->produtos = $produtos;
        }

        public function getPrecos(): array{
            return $this->precos;
        }

        public function setPrecos(array $precos): void{
            $this->precos = $precos;
        }

        public function getQuantidades(): array{
            return $this->quantidades;
        }

        public function setQuantidades(int $id, int $quant): void{
            $this->quantidades[$id] -= $quant;
        }

        public function adicionarProdutos(string $produto, int $quantidades, float $preco){
            array_push($this->produtos, $produto);
            array_push($this->quantidades, $quantidades);
            array_push($this->precos, $preco);
        }

        public function detalhes(){
            echo("<h4>Detalhes da Loja{$this->getNome()}</h4>");
            echo("<p>ID Produtos Quantidades Preços");
            for($c = 0; $c < count($this->getProdutos()); $c++){
                echo("<p>$c {$this->getProdutos()[$c]} {$this->getPrecos()[$c]} ". $this->getQuantidades()[$c]. "</p>");
            }
        }

        // public function adicionarQuantindade($quantidades){

        // }

        // public function adicionarPreco($preco){

        // }
    }
?>