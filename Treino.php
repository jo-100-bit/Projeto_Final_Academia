<?php

    require_once 'Professor.php';
    require_once 'Exercicio.php';

    class Treino {
        private string $nome;
        private Professor $professor;
        private array $exercicios;

        public function __construct(string $nome, Professor $professor) {
            $this->nome = $nome;
            $this->professor = $professor;
            $this->exercicios = [];
        }

        public function adicionarExercicio(Exercicio $exercicio): void {
            $this->exercicios[] = $exercicio;
        }

        public function exibirTreino(): void {
            echo "=== TREINO ===<br>";

            echo "Nome: " . $this->nome . "<br>";

            echo "Professor: " . $this->professor->getNome() . "<br>";

            echo "<br>Exercícios:<br>";

            foreach ($this->exercicios as $exercicio) {
                $exercicio->exibirDados();
            }
        }
    }
    ?>