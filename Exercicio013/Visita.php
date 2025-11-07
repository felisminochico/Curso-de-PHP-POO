<?php 
    require_once "./pessoa.php";
    require_once "./casa.php";

    final class Visita extends Pessoa implements Controle{
        private Casa $casa;

        public function __construct(string $nome, int $idade, string $sexo){
            parent::__construct($nome, $idade, $sexo);
            $this->setDono(false);
        }

        #[\Override]
        public function detalhes(){
            echo("<h4>Detalhes da Visita</h4>");
            echo("<p>Nome: {$this->getNome()}</p>");
            echo("<p>Idade: {$this->getIdade()}</p>");
            echo("<p>Sexo: {$this->getSexo()}");
            echo("<p>Dentro: ". ($this->getDentro() === true ? "SIM":"NÃO"). "</p>");
            echo("<p>Acordado: ". ($this->getAcordado() ? "SIM":"NÃO"). "</p>");
            echo("<p>Assistindo: ". ($this->getAssistindo()?"SIM":"NÃO"). "</p>");
        }

        public function entrarVisita(Casa $casa){
            if($casa->getComprada() === true){
                if(($casa->getAberto() === true && $this->getAcordado()) && ($casa->dono->getDentro() && $casa->dono->getAcordado())){
                    $this->setDentro(true);
                    $this->casa = $casa;
                    echo("<p>Entrada feita com sucesso!</p>");
                }else{
                    echo("<p>ERRO: Não podes entrar. Não há ninguém em casa ou estás Dormindo.</p>");
                }   
            }else{
                echo("<p>ERRO: Impossível Entrar! A {$casa->getNome()} ainda não foi comprada;.");
            }
        }

        #[\Override]
        public function entrar(){
            
        }

        #[\Override]
        public function sair(){
            if($this->getDentro() && $this->getAcordado()){
                $this->setDentro(false);
                echo("<p>Saindo...</p>");
            }else{
                echo("<p>ERRO: Impossível Sair! Você já está fora ou Dormindo.");
            }
        }

        #[\Override]
        public function assistir(){
            if($this->getDentro() && $this->getAcordado()){
                $this->setAssistindo(true);
                echo("<p>Assistindo...</p>");
            }else{
                echo("<p>Você está fora ou Dormindo.</p>");
            }
        }

        #[\Override]
        public function ligarTV(){
            if($this->getDentro() && $this->getAcordado()){
                if($this->casa->getTelevisao() === true){
                    echo("<p>ERRO: O Dono já ligou a TV.</p>");
                }else{
                    $this->casa->setTelevisao(true);
                    echo("<p>Ligando a TV.");
                }
            }else{
                echo("<p>ERRO: Você está fora ou Dormindo.");
            }
        }

        #[\Override]
        public function desligarTV(){
            if($this->getDentro() && $this->getAcordado()){
                if($this->casa->setTelevisao(false)){
                    echo("<p>ERRO: A TV já está desligada.</p>");
                }else{
                    $this->casa->setTelevisao(false);
                    echo("<p>Desligando a TV.</p>");
                }
            }else{
                echo("<p>ERRO: Você está fora ou Dormindo.</p>");
            }
        }

        #[\Override]
        public function dormir(){
            if($this->getDentro() && $this->getAcordado()){
                $this->setAcordado(false);
                echo("<p>Dormindo...");
            }else{
                echo("<p>ERRO: Você está fora ou já estás Dormindo.</p>");
            }
        }

        #[\Override]
        public function acordar(){
            if($this->getDentro() && $this->getAcordado() === false){
                $this->setAcordado(true);
                echo("<p>Acordando...</p>");
            }else{
                echo("<p>ERRO: Você já está acordado.</p>");
            }
        }
    }
?>