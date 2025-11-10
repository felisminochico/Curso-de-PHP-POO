 <?php 
    require_once "./ControleRedeSocial2.php";
    require_once "./ContaRedeSocial.php";

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

        public function setContas(ContaRedeSocial $contas): void{
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
                if($conta->getNomeRedeSocial() === $redeSocial->getNome()){
                    echo("<p><strong>ERRO:</strong> {$this->getNome()} já tem uma conta na Plataforma {$redeSocial->getNome()}.</p>");
                    return;
                }
            }

            $this->setContas(new ContaRedeSocial($redeSocial->getNome()));
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

                for($c = 0; $c < count($this->getContas()); $c++){
                    echo("<tr><td>$c</td> <td>{$this->getContas()[$c]->getNomeRedeSocial()}</td></tr>");
                }
                echo("</tbody></table>");
            }
        }

        public function enviarMensagem(RedeSocial $redeSocial, Pessoa $pessoa, string $mensagem){
            if($this->getTemConta()){
                if($pessoa->getTemConta()){
                    for($c = 0; $c < count($this->getContas()); $c++){
                        for($c2 = 0; $c2 < count($pessoa->getContas()); $c2++){
                            if($this->getContas()[$c]->getNomeRedeSocial() == $redeSocial->getNome() && $pessoa->getContas()[$c2]->getNomeRedeSocial() == $redeSocial->getNome()){
                                $pessoa->getContas()[$c2]->setMensagens($mensagem);
                                $pessoa->getContas()[$c2]->setEnviadores($this->getNome());
                                echo("<p>Mensagem de {$this->getNome()} para {$pessoa->getNome()} enviada com sucesso!</p>");
                                return;
                            }
                        }
                    }       
                }else{
                    echo ("<p><strong>ERRO:</strong> O Receptor {$this->getNome()} não tem uma Conta ainda.</p>");
                    return;    
                }
            }else{
                // echo("<p><strong>ERRO:</strong> {$this->getNome()} não tem uma conta na Plataforma {$redeSocial->getNome()}.</p>");
                echo ("<p><strong>ERRO:</strong> O Enviador {$this->getNome()} não tem uma Conta ainda.</p>");
            }
        }

        public function consultarMensagens(RedeSocial $redeSocial){
            foreach($this->getContas() as $conta){
                if($conta->getNomeRedeSocial() == $redeSocial->getNome()){
                    echo("<table><caption>Mensagens de {$this->getNome()}</caption>");
                    echo("<tbody>");
                    echo("<tr><th>Nome</th> <th>Mensagem</th> <th>Plataforma</th></tr>");
                    for($c = 0; $c < count($this->getContas()); $c++){
                        if($this->getContas()[$c]->getNomeRedeSocial() == $redeSocial->getNome()){
                            for($c2 = 0; $c2 < count($this->getContas()[$c]->getMensagens()); $c2++){
                                echo("<tr><td>{$this->getContas()[$c]->getEnviadores()[$c2]}</td> <td>{$this->getContas()[$c]->getMensagens()[$c2]}</td> <td>{$this->getContas()[$c]->getNomeRedeSocial()}</td></tr>");
                            }
                            echo("</tbody></table>");
                            return;
                        }
                    }
                }
            }
            echo("<p><strong>ERRO:</strong> {$this->getNome()} não tem uma Conta na Plataforma {$redeSocial->getNome()}");
        }
    }
?>