<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        private string $matricula;
        private bool $ativo;

        public function __construct(string $nome, string $cpf, string $email, string $matricula) {
            parent::__construct($nome, $cpf, $email);

            $this->matricula = $matricula;
            $this->ativo = true;
        }

        public function getMatricula(): string {
            return $this->matricula;
        }

        public function isAtivo(): bool {
            return $this->ativo;
        }

        public function ativar(): void {
            $this->ativo = true;
        }

        public function desativar(): void {
            $this->ativo = false;
        }

        // SOBRESCRITA
        public function exibirDados(): void {
            echo "=== ALUNO ===<br>";

            echo "Nome: " . $this->nome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "E-mail: " . $this->email . "<br>";
            echo "Matrícula: " . $this->matricula . "<br>";
            echo "Status: " . ($this->ativo ? "Ativo" : "Inativo") . "<br>";
        }
        public function apresentar(): void {
            echo "Olá! Sou o aluno " . $this->nome . ", matricula" . $this->matricula . ".<br>";
        }
    
    }
    ?>