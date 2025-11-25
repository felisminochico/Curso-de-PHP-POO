<?php
    require_once "./Pesssoa.php";

    class ContaBanco{
        private Pessoa $dono;
        private int $numeroConta;
        private float $saldo;

        public function __construct(Pessoa $dono, int $numeroConta){
            $this->setDono($dono);
            $this->setNumeroConta($numeroConta);
            $this->setSaldo(0);
        }

        public function getDono(): Pessoa{
            return $this->dono;
        }

        public function setDono(Pessoa $dono): void{
            $this->dono = $dono;
        }

        public function getNumeroConta(): int{
            return $this->numeroConta;
        }

        public function setNumeroConta(int $numeroConta): void{
            $this->numeroConta = $numeroConta;
        }

        public function getSaldo(): float{
            return $this->saldo;
        }

        public function setSaldo(float $saldo): void{
            $this->saldo = $saldo;
        }
    }
?>