<?php

    class Pessoa {
        protected string $nome;
        protected string $cpf;
        protected string $email;

        public function __construct(string $nome, string $cpf, string $email) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getCpf(): string {
            return $this->cpf;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function exibirDados(): void {
            echo "=== PESSOA ===<br>";
            echo "Nome: " . $this->nome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "E-mail: " . $this->email . "<br>";
        }
    
        public function apresentar(): void {
            echo "Olá! Meu nome é " . $this->nome . "<br>";
        }
    
    }
    ?>