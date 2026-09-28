<?php

    require_once 'Pessoa.php';

    class Professor extends Pessoa {
        private string $especialidade;
        private string $cref;

        public function __construct(string $nome, string $cpf, string $email, string $especialidade, string $cref) {
            parent::__construct($nome, $cpf, $email);

            $this->especialidade = $especialidade;
            $this->cref = $cref;
        }

        public function getEspecialidade(): string {
            return $this->especialidade;
        }

        public function getCref(): string {
            return $this->cref;
        }

        // SOBRESCRITA
        public function exibirDados(): void {
            echo "=== PROFESSOR ===<br>";

            echo "Nome: " . $this->nome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "E-mail: " . $this->email . "<br>";
            echo "Especialidade " . $this-> especialidade . "<br>";
            echo "CREF: " . $this->cref . "<br>";

        }
    
        public function apresentar(): void {
            echo "Olá! Sou o professor " . $this->nome . ", especialista em " . $this->especialidade . "<br>";
        }    
}
?>