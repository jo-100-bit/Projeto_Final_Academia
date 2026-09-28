<?php

    require_once 'Aluno.php';
    require_once 'Plano.php';

    class Matricula {
        private int $numero;
        private Aluno $aluno;
        private Plano $plano;
        private string $dataMatricula;
        private bool $ativa;

        public function __construct(int $numero, Aluno $aluno, Plano $plano, string $dataMatricula) {
            $this->numero = $numero;
            $this->aluno = $aluno;
            $this->plano = $plano;
            $this->dataMatricula = $dataMatricula;
            $this->ativa = true;
        }

        public function getNumero(): int {
            return $this->numero;
        }

        public function getAluno(): Aluno {
            return $this->aluno;
        }

        public function getPlano(): Plano {
            return $this->plano;
        }

        public function alterarPlano(Plano $novoPlano): void {
            $this->plano = $novoPlano;
        }

        public function cancelar(): void {
            $this->ativa = false;
            $this->aluno->desativar();
        }

        public function exibirDados(): void {
            echo "=== MATRÍCULA ===<br>";

            echo "Número: " . $this->numero . "<br>";

            echo "Aluno: " . $this->aluno->getNome() . "<br>";

            echo "Plano: " . $this->plano->getNome() . "<br>";

            echo "Data: " . $this->dataMatricula . "<br>";

            echo "Situação: " . ($this->ativa ? "Ativa" : "Cancelada") . "<br>";
        }
    }
    ?>