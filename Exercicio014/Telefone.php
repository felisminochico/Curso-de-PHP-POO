<?php 
require_once "./Visor.php";

    class Telefone{
        private string $modelo;
        private Visor $visor;
        private bool $visorCriado;

        public function __construct(string $modelo){
            $this->setModelo($modelo);
            $this->setVisorCriado(false);
        }

        public function getModelo(): string{
            return $this->modelo;
        }

        public function setModelo(string $modelo): void{
            $this->modelo = $modelo;
        }

        public function getVisorCriado(): bool{
            return $this->visorCriado;
        }

        private function setVisorCriado(bool $visorCriado): void{
            $this->visorCriado = $visorCriado;
        }

        public function criarVisor(int $taman){
            if($this->getVisorCriado()){
                echo("<p>ERRO: O Visor do Telefone {$this->modelo} já foi criado.</p>");
            }else{
                $this->visor = new Visor();
                $this->visor->setTamanho($taman);
                $this->setVisorCriado(true);
                echo("<p>Visor criado com sucesso!</p>");
            }
        }

        public function pegarTamanhoVisor(){
            return $this->visor->getTamanho();
        }
    }
?>