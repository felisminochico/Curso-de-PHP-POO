<?php 
    require_once "./Controle.php";
    
    class ContaBanco implements Controle{
        protected string $dono;
        protected float $saldo;

        public function __construct(string $dono, float $iniciar){
            $this->setDono($dono);
            $this->setSaldo($iniciar);
        }

        private function getDono(): string{
            return $this->dono;
        }

        private function setDono(string $dono): void{
            $this->dono = $dono;
        }

        private function getSaldo(): float{
            return $this->saldo;
        }

        private function setSaldo(float $saldo): void{
            $this->saldo = $saldo;
        }

        public function consultar(){
            echo ("<h3>Consulta de Saldo</h3>");
            echo ("Nome: ". $this->getDono());
            echo ("<br>Saldo: ". number_format($this->getSaldo(), 2, ",", "."). " Kzs");
        }

        public function depositar(float $sal){
            $this->setSaldo(($this->getSaldo() + $sal));
            echo ("<h3>Depósito</h3>");
            echo ("<p>Depósito de ". number_format($sal, 2, ",", "."). " Kzs efetuado com sucesso!");
        }

        public function levantar(float $sal){
            if($sal > $this->getSaldo()){
                echo ("<p><strong>ERRO:</strong> O Saldo do seu Cartão é inferior à ". number_format($sal, 2, ",", "."). " Kzs");
            }else{
                $this->setSaldo(($this->getSaldo() - $sal));
                echo ("<p>Levantamento de ". number_format($sal, 2, ",", "."). " Kzs efetuado com sucesso!</p>");
            }
        }
    }
?>