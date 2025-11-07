<?php

use Exception as GlobalException;
use FFI\Exception;

    require_once "./Dono.php";
    class Casa{
        private string $nome;
        private bool $aberto;
        private bool $ligarTV;
        private bool $comprada;
        private bool $televisao;
        public Dono $dono;

        public function __construct(string $nome){
            $this->setNome($nome);
            $this->setAberto(false);
            $this->setTelevisao(false);
            $this->setComprada(false);            
        }

        public function getNome(): string{
            return $this->nome;
        }

        private function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getAberto(): bool{
            return $this->aberto;
        }

        public function setAberto(bool $aberto): void{
            $this->aberto = $aberto;
        }

        public function getLigarTV(): bool{
            return $this->ligarTV;
        }

        public function setLigarTV(bool $ligarTV): void{
            $this->ligarTV = $ligarTV;
        }

        public function getComprada(): bool{
            return $this->comprada;
        }

        public function setComprada(bool $comprada): void{
            $this->comprada = $comprada;
        }

        public function getTelevisao(): bool{
            return $this->televisao;
        }

        public function setTelevisao(bool $televisao): void{
            $this->televisao = $televisao;
        }

        public function getDono(): Dono{
            return $this->dono;
        }

        public function setDono(Dono $dono): void{
            try{
                if(($dono instanceof Dono && $dono->getTemCasa() === false) && ($this->getComprada() === false)){
                    $this->dono = $dono;
                    echo("<p>Dono entregue com sucesso!</p>");
                    return;
                }else{
                    throw new GlobalException("Impossível trocar de Dono");
                }
            }catch(Throwable $erro){
                echo("<p>ERRO: ". $erro->getMessage(). "</p>");
            }
        }
    }
?>