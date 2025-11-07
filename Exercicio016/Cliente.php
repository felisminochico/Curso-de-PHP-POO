<?php 
    require_once "./ContaBanco.php";
    require_once "./ControleContaBanco.php";
    require_once "./ControleLoja.php";
    require_once "./Loja.php";

    class Cliente implements ControleContaBanco, ControleLoja{
        private string $nome;
        private int $idade;
        private string $sexo;
        private bool $temConta;
        private ContaBanco $conta;

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
            return $this->conta;
        }

        private function setContaBanco(ContaBanco $conta): void{
            $this->conta = $conta;
        }

        public function apresentar(): void{
            echo("Olá, sou {$this->getNome()}! Tenho {$this->getIdade()} anos de idade.");
        }

        public function criarContaBanco(int $numeroConta){
            if($this->getTemConta() === true){
                echo("<p><strong>ERRO:</strong> Você já tem uma Conta.</p>");
            }else{
                $this->conta = new ContaBanco($this, $numeroConta);
                $this->setTemConta(true);
                echo("<p>Conta Criada com sucesso!</p>");
            }
        }

        public function detalhesPessoais(): void{
            echo("<h4>Detalhes Pessoais</h4>");
            echo("<p>Nome: ". $this->getNome(). "</p>");
            echo("<p>Idade: {$this->getIdade()}</p>");
            echo("<p>Sexo: {$this->getSexo()}");
            echo("<p>Tem Conta: ". ($this->getTemConta()?"Sim":"Não"). "</p>");
        }

        public function detalhesConta(): void{
            if($this->getTemConta()){
                echo("<h4>Detalhes da Conta</h4>");
                echo("<p>Dono da Conta: ". $this->getContaBanco()->getDonoConta(). "</p>");
                echo("<p>Saldo da Conta: ". number_format($this->getContaBanco()->getSaldo(), 2, ",", "."). " Kzs</p>");
                echo("<p>Número de Conta: {$this->getContaBanco()->getNumeroConta()}");
            }else{
                echo("<p><strong>ERRO:</strong> Impossível mostrar os detalhes de {$this->getNome()}. Cliente Sem Conta.</p>");
            }
        }

        public function levantar(float $saldo){
            if($this->getTemConta()){
                if($this->getContaBanco()->getSaldo() >= $saldo){
                    $this->getContaBanco()->setSaldo(($this->getContaBanco()->getSaldo() - $saldo));
                    echo("<p>Levantamento de ". number_format($saldo, 2, ",", "."). " Kzs efetuada com sucesso!</p>");
                }else{
                    echo("<p>O Saldo do seu Cartão é inferiror a ". number_format($saldo, 2, ",", "."));
                }
            }else{
                echo("<p><strong>ERRO:</strong> Impossível fazer Levantamento. Cliente Sem Conta.</p>");
            }
        }

        public function depositar(Cliente $receptor, float $saldo){
            if($receptor->getTemConta()){
                $receptor->getContaBanco()->setSaldo(($receptor->getContaBanco()->getSaldo() + $saldo));
                echo("<p>Depósito de ". number_format($saldo, 2, ",", "."). " Kzs realizado com sucesso na Conta de {$receptor->getContaBanco()->getDonoConta()}!</p>");
            }else{
                echo("<p><strong>ERRO:</strong> Impossível realizar o Depósito. {$receptor->getNome()} não tem uma Conta.</p>");
            }
        }

        public function transferir(Cliente $receptor, float $saldo){
            if($receptor instanceof Cliente){
                if($this->getTemConta()){
                    if($receptor->getTemConta()){
                        if($this->getContaBanco()->getSaldo() >= $saldo){
                            $this->getContaBanco()->setSaldo(($this->getContaBanco()->getSaldo() - $saldo));
                            $receptor->getContaBanco()->setSaldo(($receptor->getContaBanco()->getSaldo() + $saldo));
                            echo("<p>Transferência da Conta {$this->getContaBanco()->getDonoConta()} de ". number_format($saldo, 2, ",", "."). " Kzs para a Conta {$receptor->getContaBanco()->getDonoConta()} realizada com sucesso!<p>");
                        }else{
                            print("<p><strong>ERRO:</strong> Impossível realizar a Transferência. O Saldo da sua Conta é inferior à ". number_format($saldo, 2, ",", "."). " Kzs.");
                        }
                    }else{
                        print("<p><strong>ERRO:</strong> Impossível realizar a Transferência. {$receptor->getNome()} não tem Conta Bancária.</p>");
                    }
                }else{
                    print("<p><strong>ERRO:</strong> Impossível realizar a Transferência. Você não tem uma Conta Bancária.</p>");
                }
            }
        }

        public function consultar(){
            if($this->getTemConta()){
                print("<h4>Consulta de Saldo</h4>");
                print("<p>Saldo da Conta: ". number_format($this->getContaBanco()->getSaldo(), 2, ",", ".")). " Kzs</p>";
            }else{
                print("<p><strong>ERRO:</strong> Impossível Consutar. Você não tem uma Conta Bancária.</p>");
            }
        }

        public function comprarProduto(int $id, int $quant, Loja $loja){
            if($this->getTemConta()){
                if($quant <= $loja->getQuantidades()[$id]){
                    if($this->getContaBanco()->getSaldo() >= ($quant * $loja->getPrecos()[$id])){
                        $this->getContaBanco()->setSaldo(($this->getContaBanco()->getSaldo() - ($quant * $loja->getPrecos()[$id])));
                        $precoTotal = $quant * $loja->getPrecos()[$id];
                        $loja->setQuantidades($id, $quant);
                        echo("<p>Compra realizada com sucesso! Produto: {$loja->getProdutos()[$id]}, Quantidade: $quant Preço Total: ". number_format($precoTotal, 2, ",", "."). " Kzs.</p>");
                    }else{
                        echo("<p><strong>ERRO:</strong> Impossível realizar a Compra. O Saldo do seu Cartão é inferior.</p>");
                    }
                }else{
                    echo("<p><strong>ERRO:</strong> A Quantidade do Produto {$loja->getProdutos()[$id]} é inferior à $quant");
                }
            }else{
                echo("<p><strong>ERRO:</strong> Impossível realizar a Compra. Você não tem uma Conta bancária.</p>");
            }
        }
    }
?>