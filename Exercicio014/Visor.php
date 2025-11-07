<?php 
    class Visor{
        private int $tamanho;
        
        public function getTamanho(): int{
            return $this->tamanho;
        }

        public function setTamanho(int $tamanho): void{
            $this->tamanho = $tamanho;
        }
    }
?>