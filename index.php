 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Academia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&family=Barlow+Condensed:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --fundo: #ECEEE9;
            --papel: #F8F9F6;
            --tinta: #16222A;
            --tinta-suave: #4A5A63;
            --destaque: #2440E8;
            --linha: #C6CDC3;
            --professor: #0E8A6B;
            --fonte-titulo: "Barlow Condensed", "Arial Narrow", Impact, sans-serif;
            --fonte-texto: "Barlow", "Segoe UI", Helvetica, Arial, sans-serif;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --fundo: #10171B;
                --papel: #182228;
                --tinta: #E8ECE6;
                --tinta-suave: #A3B0B6;
                --destaque: #6F86FF;
                --linha: #2C3A42;
                --professor: #4CC9A4;
            }
        }

        *, *::before, *::after { box-sizing: border-box; }

        html { background: var(--fundo); }

        body {
            margin: 0;
            padding: clamp(1rem, 4vw, 3rem) clamp(1rem, 4vw, 2rem);
            font-family: var(--fonte-texto);
            font-size: 1.0625rem;
            line-height: 1.7;
            color: var(--tinta);
            background: var(--fundo);
        }

        main.painel {
            max-width: 46rem;
            margin: 0 auto;
            padding: clamp(1.5rem, 5vw, 3rem);
            background: var(--papel);
            border: 1px solid var(--linha);
            border-top: 8px solid var(--destaque);
            border-radius: 4px;
        }

        main.painel h1 {
            margin: 0 0 2rem;
            padding-bottom: 1rem;
            font-family: var(--fonte-titulo);
            font-weight: 700;
            font-size: clamp(2.4rem, 8vw, 3.8rem);
            line-height: 1;
            letter-spacing: 0.01em;
            border-bottom: 1px solid var(--linha);
        }

        main.painel h2 {
            margin: 2rem 0 1rem;
            padding-left: 0.9rem;
            font-family: var(--fonte-titulo);
            font-weight: 600;
            font-size: 1.75rem;
            line-height: 1.1;
            border-left: 5px solid var(--destaque);
        }

        main.painel .lista {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 1.25rem;
        }

        main.painel .lista li {
            margin: 0;
            padding: 1.1rem 1.4rem;
            font-size: 1.125rem;
            line-height: 1.6;
            background: var(--fundo);
            border: 1px solid var(--linha);
            border-left: 6px solid var(--destaque);
            border-radius: 4px;
        }

        main.painel .lista li.professor { border-left-color: var(--professor); }
        main.painel .lista li p { margin: 0; }

        main.painel :focus-visible {
            outline: 3px solid var(--destaque);
            outline-offset: 2px;
        }

        @media (max-width: 480px) {
            body { font-size: 1rem; }
            main.painel { border-radius: 0; }
        }
    </style>
</head>
<body>
<main class="painel">
<?php

    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Plano.php';
    require_once 'Matricula.php';
    require_once 'Exercicio.php';
    require_once 'Treino.php';
    require_once 'Pagamento.php';

    echo "<h1>Sistema de Academia - Versão Final</h1>";

   
    // ==============================
    // OBJETIVOS
    // ==============================
    $aluno1 = new Aluno("João Silva", "111.111.111-11", "joao@email.com", "ALU001");
    $aluno2 = new Aluno("Maria Oliveira", "222.222.222-22", "maria@email.com", "ALU002");
 
    $professor1 = new Professor("Carlos Santos", "333.333.333-33", "carlos@email.com", "Musculação", "CREF001");
    $professor2 = new Professor("Ana Costa", "444.444.444.-44", "ana@email.com", "Treinamento Funcional", "CREF002");
    
     // ==============================
    // POLIMORFISMO
    // ==============================
    echo "<h2>Pessoas da Academia</h2>";

    $pessoas = [$aluno1, $aluno2, $professor1, $professor2, ];

    foreach ($pessoas as $pessoa) {
        $pessoa->apresentar();
        echo "<br>";
    }
?>
<script>
    // Separa cada apresentação em um bloco próprio (não altera o PHP).
    (function () {
        var painel = document.querySelector('main.painel');
        var titulo = painel.querySelector('h2');
        if (!titulo) return;

        var script = document.currentScript;
        var grupos = [], atual = [];
        function fechar() {
            if (atual.some(function (n) { return n.textContent.trim() !== ''; })) grupos.push(atual);
            atual = [];
        }

        var no = titulo.nextSibling, proximo;
        while (no && no !== script) {
            proximo = no.nextSibling;
            if (no.nodeName === 'BR') { fechar(); painel.removeChild(no); }
            else if (/^(P|DIV)$/.test(no.nodeName)) { fechar(); grupos.push([no]); }
            else atual.push(no);
            no = proximo;
        }
        fechar();

        var lista = document.createElement('ul');
        lista.className = 'lista';
        grupos.forEach(function (g) {
            var li = document.createElement('li');
            g.forEach(function (n) { li.appendChild(n); });
            if (/professor/i.test(li.textContent)) li.className = 'professor';
            lista.appendChild(li);
        });
        titulo.after(lista);
    })();
</script>
</main>
</body>
</html>