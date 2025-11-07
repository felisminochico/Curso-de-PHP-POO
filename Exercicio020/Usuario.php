<?php 
    require_once './Pessoa.php';
    require_once './ControleRedeSocial.php';

    final class Usuario extends Pessoa implements ControleRedeSocial{
        private RedeSocial $redeSocial;
        private array $mensagens = [];
        private array $enviadores = [];

        public function getRedeSocial(): RedeSocial{
            return $this->redeSocial;
        }

        public function setRedeSocial(RedeSocial $redeSocial): void{
            $this->redeSocial = $redeSocial;
        }

        public function getMensagens(): array{
            return $this->mensagens;
        }

        public function setMensagens(string $mensagem): void{
            array_push($this->mensagens, $mensagem);
        }

        public function getEnviadores(): array{
            return $this->enviadores;
        }

        public function setEnviadores(string $enviador): void{
            array_push($this->enviadores, $enviador);
        }

        
        public function enviarMensagem(Pessoa $pessoa, string $mensagem){
            if($pessoa->getTemConta() === false){
                echo "<p><strong>ERRO:</strong> {$pessoa->getNome()} não tem uma conta.</p>";
            }else{
                $pessoa->getConta()->setMensagens($mensagem);
                $pessoa->getConta()->setEnviadores($this->getNome());
                echo "<p>Mensagem enviado com sucesso!</p>";
            }
        }

        public function verMensagens(){
            if($this->getTemConta()){
                if(count($this->getMensagens()) === 0){
                    echo "<p>Sem mensagens ainda.</p>";
                }else if(count($this->getMensagens()) > 0){
                    echo "<h3>Mensagens de {$this->getNome()}</h3>";
                    for($c = 0; $c < count($this->getMensagens()); $c++){
                        echo "<p><strong>{$this->getEnviadores()[$c]}:</strong> {$this->getMensagens()[$c]}</p>";
                    }
                }
            }else{
                echo 'Usuário sem Conta';
            }
        }

        public function lerMensagens(){
            
        }
        
    }
?>