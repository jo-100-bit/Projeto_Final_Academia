<?php

    require_once 'Matricula.php';

    class Pagamento {
        private int $codigo;
        private Matricula $matricula;
        private float $valor;
        private string $data;
        private bool $pago;

        public function __construct(int $codigo, Matricula $matricula, float $valor, string $data) {
            $this->codigo = $codigo;
            $this->matricula = $matricula;
            $this->valor = $valor;
            $this->data = $data;
            $this->pago = false;
        }

        public function realizarPagamento(): void {
            $this->pago = true;
        }

        public function isPago(): bool {
            return $this->pago;
        }

        public function exibirDados(): void {
            echo "=== PAGAMENTO ===<br>";

            echo "Código: " . $this->codigo . "<br>";

            echo "Aluno: " . $this->matricula->getAluno()->getNome() . "<br>";

            echo "Valor: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";

            echo "Data: " . $this->data . "<br>";

            echo "Situação: " . ($this->pago ? "Pago" : "Pendente") . "<br>";
        }
    }
    ?>