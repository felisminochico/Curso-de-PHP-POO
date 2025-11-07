<?php 
    require_once "./pessoa.php";
    require_once "./casa.php";

    final class Dono extends Pessoa implements Controle{
        private Casa $casa;

        public function __construct(string $nome, int $idade, string $sexo){
            parent::__construct($nome, $idade, $sexo);
            $this->setDono(true);
            $this->setTemCasa(false);
        }

        private function getCasa(): Casa{
            return $this->casa;
        }

        private function setCasa(Casa $casa): void{
            $this->casa = $casa;
        }

        #[\Override]
        public function detalhes(): void{
            echo("<h4>Detalhes do Dono</h4>");
            echo("<p>Nome: {$this->getNome()}</p>");
            echo("<p>Idade: {$this->getIdade()}</p>");
            echo("<p>Sexo: {$this->getSexo()}");
            echo("<p>Dentro: ". ($this->getDentro() === true ? "SIM":"NÃO"). "</p>");
            echo("<p>Acordado: ". ($this->getAcordado() ? "SIM":"NÃO"). "</p>");
            echo("<p>Assistindo: ". ($this->getAssistindo()?"SIM":"NÃO"). "</p>");
            echo("<p>Tem Casa: ". ($this->getTemCasa() ? "SIM":"NÃO"). "</p>");
        }

        public function comprarCasa(Casa $casa){
            if($casa->getComprada() === false){
                $this->setCasa($casa);
                $this->casa->setDono($this);
                $casa->setComprada(true);
                $casa->setAberto(true);
                $this->setTemCasa(true);
                echo("<p><strong>{$casa->getNome()}</strong> comprada por <strong>{$this->getNome()}</strong> com sucesso!</p>");
            }else{
                echo("<p><strong style='color: red;'>ERRO:</strong> A {$casa->getNome()} já foi comprada.");
            }
        }

        #[\Override]
        public function entrar(){
            if($this->getDono() === true){
                if($this->getTemCasa()){
                    $this->setDentro(true);
                    $this->casa->setAberto(true);
                    echo("<p>Dono {$this->getNome()} Entrando...</p>");
                }else{
                    echo("<p>Impossível Entrar! Não tens uma Casa. Compre uma pelomenos.</p>");
                } 
            }            
        }

        #[\Override]
        public function sair(){
            if($this->getTemCasa()){
                $this->casa->setAberto(false);
                $this->setDentro(false);
                echo("<p>Saindo de casa...</p>");
            }else{
                echo("<p>ERRO: Não tens casa.</p>");
            }
        }

        #[\Override]
        public function assistir(){
            if($this->getTemCasa()){
                if($this->getDentro() && $this->getAcordado()){
                    if($this->casa->getTelevisao()){
                        $this->setAssistindo(true);
                        echo("<p>Assistindo...");
                    }else{
                        echo("<p>ERRO: A TV está desligada.</p>");
                    }
                }else{
                    echo("<p>ERRO: Você está fora ou Dormindo.</p>");
                }
            }else{
                echo("<p>ERRO: Não tens casa.</p>");
            }
        }

        #[\Override]
        public function ligarTV(){
            if($this->getTemCasa()){
                if(($this->getDentro() && $this->getAcordado())){
                    if($this->casa->getTelevisao()){
                        echo("<p>ERRO: Alguém já ligou a Televisão.</p>");
                    }else{
                        $this->casa->setTelevisao(true);
                        echo("<p>Televisão ligada com sucesso!");
                    }
                }else{
                    echo("<p>ERRO: Você está fora ou Dormindo.</p>");
                }
            }else{
                echo("<p>ERRO: Não tens uma casa.</p>");
            }
        }

        #[\Override]
        public function desligarTV(){
            if($this->getTemCasa()){
                if($this->getDentro() && $this->getAcordado()){
                    $this->casa->setTelevisao(false);
                    echo("<p>Televisão desligada com sucesso!</p>");
                }else{
                    echo("<p>ERRO: Você está fora ou Dormindo.</p>");
                }
            }else{
                echo("<p>ERRO: Não tens uma casa.</p>");
            }
        }

        #[\Override]
        public function dormir(){
            if($this->getTemCasa()){
                if($this->getDentro()){
                    $this->setAcordado(false);
                    echo("<p>Dormindo...</p>");
                }else{
                    echo("<p>ERRO: Você está fora.");
                }
            }else{
                echo("<p>ERRO: Não tens uma casa.</p>");
            }
        }

        #[\Override]
        public function acordar(){
            if($this->getAcordado()){
                echo("<p>Já estás acordado.</p>");
            }else{
                $this->setAcordado(true);
                echo("<p>Acordando...</p>");
            }
        }
    }
?>