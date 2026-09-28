<?php

    class Plano {
        private string $nome;
        private float $valorMensal;
        private int $duracaoMeses;

        public function __construct(string $nome, float $valorMensal, int $duracaoMeses) {
            $this->nome = $nome;
            $this->valorMensal = $valorMensal;
            $this->duracaoMeses = $duracaoMeses;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getValorMensal(): float {
            return $this->valorMensal;
        }

        public function getDuracaoMeses(): int {
            return $this->duracaoMeses;
        }

        public function calcularValorTotal(): float {
            return $this->valorMensal *
                $this->duracaoMeses;
        }

        public function exibirDados(): void {
            echo "=== PLANO ===<br>";
            echo "Nome: " . $this->nome . "<br>";

            echo "Valor mensal: R$ " . number_format($this->valorMensal, 2, ',', '.') . "<br>";

            echo "Duração: " . $this->duracaoMeses . " meses<br>";
        }
    }
    ?>