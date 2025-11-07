<?php 
    require_once "./Cliente.php";

    class ContaBanco{
        private string $donoConta;
        private float $saldo;
        private int $numeroConta;

        public function __construct(Cliente $dono, int $numeroConta){
            if($dono->getTemConta()){
                print("<p><strong>ERRO:</strong>{$dono->getNome()} já tem uma Conta Bancária.</p>");
            }else{
                $this->setDonoConta($dono->getNome());
                $this->setSaldo(0);
                $this->setNumeroConta($numeroConta);
            }
        }

        public function getDonoConta(): string{
            return $this->donoConta;
        }

        public function setDonoConta(string $donoConta): void{
            $this->donoConta = $donoConta;
        }

        public function getSaldo(): float{
            return $this->saldo;
        }

        public function setSaldo(float $saldo): void{
            $this->saldo = $saldo;
        }

        public function getNumeroConta(): int{
            return $this->numeroConta;
        }

        public function setNumeroConta(int $numeroConta): void{
            $this->numeroConta = $numeroConta;
        }
    }
?>