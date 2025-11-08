 <?php 
    require_once "./ControleRedeSocial2.php";

    class Pessoa implements ControleRedeSocial2{
        private string $nome;
        private int $idade;
        private string $sexo;
        private array $contas = [];
        private bool $temConta;
        private array $contaAcessada = [];

        public function __construct(string $nome, int $idade, string $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setTemConta(false);
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getIdade(): int{
            return $this->idade;
        }

        public function setIdade(int $idade): void{
            $this->idade = $idade;
        }

        public function getSexo(): string{
            return $this->sexo;
        }

        public function setSexo(string $sexo): void{
            $this->sexo = $sexo;
        }

        public function getContas(): array{
            return $this->contas;
        }

        public function setContas(RedeSocial $contas): void{
            array_push($this->contas, $contas);
        }

        public function getTemConta(): bool{
            return $this->temConta;
        }

        public function setTemConta(bool $temConta): void{
            $this->temConta = $temConta;
        }

        // public function getContaAcessada(): array{
        //     return $this->contaAcessada;
        // }

        // public function setContaAcessada(bool $contaAcessada): void{
        //     array_push($this->contaAcessada, $contaAcessada);
        // }

        public function detalhesPessoais(): void{
            echo "<h4>Detalhes Pessoais</h4>";
            echo("<p>Nome: {$this->getNome()}</p>");
            echo("<p>Idade: {$this->getIdade()}</p>");
            echo("<p>Sexo: ". ($this->getSexo() === "M" ? "Masculino" : "Feminino"). "</p>");
            echo("<p>Contas: ". count($this->getContas()). "</p>");
            echo("Tem Conta: ". ($this->getTemConta() ? "Sim" : "Não"));
        }

        public function criarConta(RedeSocial $redeSocial){
            foreach($this->getContas() as $conta){
                if($conta === $redeSocial){
                    echo("<p><strong>ERRO:</strong> {$this->getNome()} já tem uma conta na Plataforma {$redeSocial->getNome()}.</p>");
                    return;
                }
            }

            $this->setContas($redeSocial);
            $redeSocial->novoUsuario($this);
            $this->setTemConta(true);
            echo("<p>Conta {$this->getNome()} na Plataforma {$redeSocial->getNome()} criada com sucesso!</p>");
        }

        public function acessarRede(RedeSocial $redeSocial){
            if($this->getTemConta()){
                foreach($redeSocial->getUsuarios() as $usuarios){
                    if($usuarios == $this->getNome()){
                        echo("<p>Conta $usuarios na Rede {$redeSocial->getNome()} acessada com sucesso!");
                        return;
                    }
                }

                echo("<p><strong>ERRO:</strong> {$this->getNome()} não tem uma conta na Plataforma {$redeSocial->getNome()}.</p>");
            }else{
                echo("<p><strong>ERRO:</strong> {$this->getNome()} não tem uma Conta ainda.</p>");
            }
        }

        public function consultarContas(){
            if(count($this->getContas()) === 0){
                echo("<p><strong>ERRO:</strong> Sem contas existentes ainda. Crie uma pelomenos.");
            }else{
                echo("<table><caption>Contas de {$this->getNome()}</caption>");
                echo("<tbody>");
                echo("<tr><th>ID</th> <th>Plataforma</th>");
                $c = 1;
                foreach($this->getContas() as $conta){
                    echo("<tr><td>$c</td> <td>{$conta->getNome()}</td></tr>");
                    $c++;
                }
                echo("</tbody></table>");
            }
        }

        public function enviarMensagem(RedeSocial $redeSocial, Pessoa $pessoa, string $mensagem){
            if($this->getTemConta()){
                echo("Você tem Conta.<br>");
                if($pessoa->getTemConta()){
                    echo("Ele ou Ela tem Conta.<br>");
                    foreach($this->getContas() as $conta){
                        foreach($pessoa->getContas() as $conta2){
                            if($conta == $redeSocial && $conta2 == $redeSocial){
                                $pessoa->getContas()[array_search($redeSocial, $pessoa->getContas())]->setMensagens($mensagem);
                                $pessoa->getContas()[array_search($redeSocial, $pessoa->getContas())]->setEnviadores($this->getNome());
                                echo("<p>Mensagem para {$pessoa->getNome()} enviada com sucesso!</p>");
                                return;
                            }
                        }
                        // if($conta == $redeSocial){
                        //     echo("Você tem Conta nessa Rede.<br>");
                             
                        //     foreach($pessoa->getContas() as $conta2){
                        //         if($conta2 == $redeSocial){
                        //             echo("Ele ou Ela tem Conta nessa Rede.<br>");
                                    
                        //         }else{
                        //             echo("<p><strong>ERRO:</strong> {$pessoa->getNome()} não tem uma conta na Plataforma {$redeSocial->getNome()}</p>");
                        //             return;
                        //         }
                        //     }
                        // }else{
                        //     echo("<p><strong>ERRO:</strong> Você não tem uma conta na Plataforma {$redeSocial->getNome()}</p>");
                        //     return;
                        // }
                    }
                }else{
                    echo("<p><strong>ERRO:</strong> {$pessoa->getNome()} ainda não tem uma Conta.</p>");
                }
            }else{
                echo("<p><strong>ERRO:</strong> Você não tem uma Conta.</p>");
            }
        }

        public function consultarMensagens(RedeSocial $redeSocial){
            echo("<table><caption>Mensagens de {$this->getNome()}</caption>");
            echo("<tbody>");
            echo("<tr><th>Nome</th> <th>Mensagem</th></tr>");
            $c = 0;
            foreach($this->getContas()[array_search($redeSocial, $this->getContas())]->getMensagens() as $mensagem){
                echo("<tr><td>{$this->getContas()[array_search($redeSocial, $this->getContas())]->getEnviadores()[$c]}</td> <td>$mensagem</td></tr>");
                $c++;
            }
            echo("</tbody></table>");
        }
    }
?>