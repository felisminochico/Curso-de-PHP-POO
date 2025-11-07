<?php 
    require_once "./Continente.php";

    class Pais extends Continente{
        protected int $totalProvincias;
        protected int $totalMunicipios;

        public function getTotalProvincias(): int{
            return $this->totalProvincias;
        }

        public function setTotalProvincias(int $totalProvincias): void{
            $this->totalProvincias = $totalProvincias;
        }

        public function getTotalMunicipios(): int{
            return $this->totalMunicipios;
        }

        public function setTotalMunicipios(int $totalMunicipios): void{
            $this->totalMunicipios = $totalMunicipios;
        }

        #[\Override]
        public function detalhes(){
            echo("<p>País: ". $this->getNome(). "<br>Províncias: ". $this->getTotalProvincias(). "<br>Municípios: ". $this->getTotalMunicipios(). "<br>Espaço: ". number_format($this->getEspaco(), 0, ",", " "). " Km<sup>2</sup><br>Habitantes: ". number_format($this->getTotalPessoas(), 0, ",", " "));
        }
    }
?>