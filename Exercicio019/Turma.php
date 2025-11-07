<?php 
    require_once "./Sistema.php";
    require_once "./Aluno.php";

    final class Turma implements Sistema{
        private string $nome;
        private int $qunatidadeAlunos;
        private string $curso;
        private array $alunos = [];

        public function __construct(string $nome, string $curso){
            $this->setNome($nome);
            $this->setQuantidadeAlunos(0);
            $this->setCurso($curso);
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getQuantidadeAlunos(): int{
            return $this->qunatidadeAlunos;
        }

        public function setQuantidadeAlunos(int $qunatidadeAlunos): void{
            $this->qunatidadeAlunos = $qunatidadeAlunos;
        }

        public function getCurso(): string{
            return $this->curso;
        }

        public function setCurso(string $curso): void{
            $this->curso = $curso;
        }

        public function getAlunos(): array{
            return $this->alunos;
        }

        public function setAlunos(Aluno $aluno): void{
            array_push($this->alunos, $aluno);
        }

        public function consultar(){
            if(count($this->getAlunos()) === 0){
                echo("<p><strong>ERRO:</strong> Turma sem Alunos.</p>");
            }else{
                echo "<table><caption>Turma {$this->getNome()}</caption>";
                echo "<tbody>";
                echo "<tr><th>Número</th> <th>Nome</th> <th>Idade</th> <th>Curso</th></tr>";
                for($c = 0; $c < count($this->getAlunos()); $c++){
                    echo "<tr>";
                    echo "<td>{$this->getAlunos()[$c]->getNumero()}</td>";
                    echo "<td>{$this->getAlunos()[$c]->getNome()}</td>";
                    echo "<td>{$this->getAlunos()[$c]->getIdade()}</td>";
                    echo "<td>{$this->getAlunos()[$c]->getCurso()}</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
        }

        public function cadastrar(Aluno $aluno){
            if($aluno->getCadastrado()){
                echo("<strong>ERRO:</strong> O Aluno {$aluno->getNome()} já foi cadastrado.</p>");
            }else{
                $this->setQuantidadeAlunos(($this->getQuantidadeAlunos() + 1));
                $aluno->setCadastrado(true);
                $aluno->setCurso($this->getCurso());
                $aluno->setNumero($this->getQuantidadeAlunos());
                $this->setAlunos($aluno);
                echo "<p>Aluno <strong>". $this->getAlunos()[$this->getQuantidadeAlunos() - 1]->getNome(). "</strong> cadastrado com sucesso!</p>";
            }
        }

        public function atualizar(Aluno $aluno, string $novoNome, int $novaIdade){
            if($aluno->getCadastrado() === false){
                echo "<p><strong>ERRO:</strong> Impossível Editar! Aluno {$aluno->getNome()} não está cadastrado.";
            }elseif($aluno->getCurso() !== $this->getCurso()){
                echo "<p><strong>ERRO:</strong> Aluno {$aluno->getNome()} não pertence ao Curso de {$this->getCurso()}</p>";
            }else{
                $aluno->setNome($novoNome);
                $aluno->setIdade($novaIdade);
                echo "<p>Atualização do Aluno feita com sucesso!</p>";
            }
        }

        public function remover(int $id){
            if($this->getQuantidadeAlunos() === 0){
                echo("<p><strong>ERRO:</strong> Turma sem Alunos cadastrados.</p>");
            }elseif($id > count($this->getAlunos()) || $id === 0){
                echo "<p><strong>ERRO:</strong> Impossível eliminar. Número de Aluno inválido.</p>";
            }else{
                array_splice($this->alunos, ($id - 1), 1);
                echo "<p>Aluno eliminado com sucesso!</p>";
            }
        }

        public function detalhes(){
            echo("<h4>Detalhes da Turma</h4>");
            echo("<p>Turma: {$this->getNome()}</p>");
            echo("<p>Curso: {$this->getCurso()}</p>");
            echo("<p>Quantidade de Alunos: {$this->getQuantidadeAlunos()}</p>");
        }
    }
?>