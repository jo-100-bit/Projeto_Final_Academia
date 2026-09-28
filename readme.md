# 🏋️‍♂️ Sistema de Gestão de Academia

Este projeto é um sistema orientado a objetos desenvolvido em **PHP** para representação e gerenciamento das rotinas essenciais de uma academia, incluindo cadastro e apresentação de pessoas (alunos e professores), controle de matrículas, planos, treinos com exercícios e pagamentos.

---

## 📌 Qual problema o sistema procura resolver?

O sistema automatiza e organiza a modelagem dos atores e processos centrais de uma academia de ginástica:
- **Gestão de Pessoas:** Diferenciação e representação clara entre alunos e professores.
- **Ciclo de Matrículas:** Associação de alunos a planos de contratação (mensais, anuais, etc.) e gerenciamento de vigência/cancelamento.
- **Prescrição de Treinos:** Permite que professores elaborem treinos estruturados compostos por séries e repetições de exercícios.
- **Controle Financeiro Basico:** Acompanhamento do status de pagamentos vinculados às matrículas.

---

## ⚙️ Como ele foi desenvolvido?

O projeto foi totalmente escrito em **PHP puro** aplicando os pilares e boas práticas da **Programação Orientada a Objetos (POO)**. Para a visualização no navegador, o arquivo principal (`index.php`) combina a execução dos objetos PHP com uma interface **HTML5, CSS3** responsiva e scripts **JavaScript** para estilização e distribuição dinâmica das apresentações na tela.

---

## 🚀 Principais Funcionalidades

1. **Gestão de Alunos e Professores:**
   - Ativação e desativação de cadastros de alunos.
   - Associação de credenciais profissionais (CREF e especialidades) para professores.
   - Apresentação personalizada baseada em papéis (`apresentar()`).
2. **Assinaturas e Matrículas:**
   - Criação de planos de treino com duração e valor mensal configuráveis.
   - Cálculo automático do valor total acumulado do plano.
   - Cancelamento e alteração de planos vinculados.
3. **Prescrição de Treinos:**
   - Criação de treinos vinculados a um professor responsável.
   - Adição e listagem dinâmica de múltiplos exercícios (com séries e repetições).
4. **Processamento de Pagamentos:**
   - Registro de transações vinculadas a uma matrícula com alteração do status para "Pago" ou "Pendente".

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8+** (Linguagem backend orientada a objetos)
- **HTML5 & CSS3** (Estruturação e estilização visual com suporte a *Dark Mode*)
- **JavaScript (Vanilla)** (Manipulação do DOM para formatação e exibição dos cards)

---

## 🧩 Conceitos de POO Presentes no Sistema

1. **Abstração & Encapsulamento:**
   - Utilização de atributos `private` e `protected` com métodos getters/setters e ações controladas (`ativar()`, `cancelar()`, `realizarPagamento()`).
2. **Herança:**
   - A classe genérica `Pessoa` serve como classe pai para as subclasses `Aluno` e `Professor`, herdando atributos comuns como `nome`, `cpf` e `email`.
3. **Polimorfismo / Sobrescrita (Overriding):**
   - As subclasses `Aluno` e `Professor` sobrescrevem os métodos `exibirDados()` e `apresentar()` herdados de `Pessoa`, fornecendo implementações específicas para cada tipo de usuário.
4. **Associação, Agregação e Composição:**
   - **Associação:** `Matricula` associa um `Aluno` a um `Plano`.
   - **Composição/Agregação:** A classe `Treino` agrupa uma coleção (array) de objetos da classe `Exercicio` e está associada a um `Professor`.
   - **Associação Financeira:** `Pagamento` referencia diretamente uma instância de `Matricula`.

---

## 📂 Estrutura de Arquivos do Projeto

```text
.
├── Pessoa.php       # Classe base (Pai)
├── Aluno.php        # Subclasse de Pessoa
├── Professor.php    # Subclasse de Pessoa
├── Plano.php        # Classe dos planos oferecidos
├── Matricula.php    # Vínculo entre Aluno e Plano
├── Exercicio.php    # Unidade de exercício do treino
├── Treino.php       # Agrupamento de exercícios por Professor
├── Pagamento.php    # Registro de transação
└── index.php        # Interface HTML/PHP e execução principal
```

---

## 💻 Como Executar o Projeto

1. Certifique-se de ter um servidor PHP instalado (como XAMPP, WAMP ou PHP CLI).
2. Clone o repositório para o diretório de execução do servidor web.
3. Inicie o servidor PHP e acesse o arquivo `index.php` pelo navegador:
   ```bash
   php -S localhost:8000
   ```
4. Acesse no seu navegador o endereço: `http://localhost:8000/index.php`.