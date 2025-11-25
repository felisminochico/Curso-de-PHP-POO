<?php 
    require_once "./ImplementarContaBanco.php";
    require_once "./ContaBanco.php";

    class Pessoa implements ImplementarContaBanco{
        private string $nome;
        private int $idade;
        private string $sexo;
        private bool $temConta;
        private ContaBanco $contaBanco;

        public function __construct(string $nome, int $idade, string $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setTemConta(false);
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

        public function getTemConta(): bool{
            return $this->temConta;
        }

        public function setTemConta(bool $temConta): void{
            $this->temConta = $temConta;
        }

        public function getContaBanco(): ContaBanco{
            return $this->contaBanco;
        }

        public function setContaBanco(ContaBanco $conta): void{
            $this->contaBanco = $conta;
        }

        public function apresentar(): void{
            echo "<h4>Apresentação</h4>";
            echo "<p>Nome: {$this->getNome()}</p>";
            echo "<p>Idade: {$this->getIdade()}</p>";
            echo "<p>Sexo: ". ($this->getSexo() === "M" ? "Masculino" : "Feminino"). "</p>";
            echo "<p>Tem Conta: ". ($this->getTemConta() ? "Sim": "Não"). "</p>";
        }

        public function consultarConta(){
            if($this->getTemConta()){
                echo "<h4>Consulta de Saldo</h4>";
                echo("<p>Nome do Dono: ". $this->getContaBanco()->getDono()->getNome());
                echo("<p>Número de Conta: ". $this->getContaBanco()->getNumeroConta(). "</p>");
                echo "<p>Saldo: ". number_format($this->getContaBanco()->getSaldo(), 2, ",","."). " Kzs</p>";
            }else{
                echo("<p><strong>ERRO:</strong> {$this->getNome()} não tem uma conta ainda.</p>");
            }
        }

        public function criarConta(int $numeroContaBanco){
            $this->setContaBanco((new ContaBanco($this, $numeroContaBanco)));
            $this->setTemConta(true);
            echo "<p>Conta {$this->getNome()} criada com sucesso!</p>";
        }

        public function consultarSaldo(){
            
        }

        public function depositar(float $saldo, Pessoa $pessoa){
            if($pessoa->getTemConta()){
                $pessoa->getContaBanco()->setSaldo($saldo);
                echo "<p>Depósito de ". number_format($saldo, 2, ",","."). " Kzs na Conta {$pessoa->getNome()} realizado com sucesso!</p>";
            }else{
                echo("<p><strong>ERRO:</strong> {$pessoa->getNome()} não tem uma conta ainda.</p>");
            }
        }

        public function transferir(float $saldo, Pessoa $pessoa): void{
            if($this->getTemConta()){
                if($pessoa->getTemConta()){
                    if($this->getContaBanco()->getSaldo() >= $saldo){
                        $pessoa->getContaBanco()->setSaldo(($pessoa->getContaBanco()->getSaldo() + $saldo));
                        $this->getContaBanco()->setSaldo(($this->getContaBanco()->getSaldo() - $saldo));
                        echo "<h4>Transferência</h4>";
                        echo "<p>Transferência de ". number_format($saldo, 2, ",", "."). " Kzs de {$this->getNome()} para {$pessoa->getNome()} realizado com sucesso!</p>";
                    }else{
                        echo("<p><strong>ERRO:</strong> {$this->getNome()} não tem saldo suficiente em sua Conta Bancária.</p>");
                        return;
                    }
                }else{
                    echo("<p><strong>ERRO:</strong> {$pessoa->getNome()} não tem uma conta ainda.</p>");
                    return;
                }
            }else{
                echo("<p><strong>ERRO:</strong> {$this->getNome()} não tem uma conta ainda.</p>");
                return;
            }
        }
    }
?>