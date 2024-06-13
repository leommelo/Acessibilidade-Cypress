<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/demanda_cadastro.css">
    <title>Document</title>
</head>
<body>
    <nav class="parte_cima">
        <h1>CADASTRAR DEMANDA</h1>
    </nav>

    <div class="formulario">
        <form action="/demanda-cadastro" id="meu_formulario" method="POST">
            @csrf
            <div class="campo">
                <label class="classificacao" for="nome">NOME DA DEMANDA</label>
                <input class="entrada" type="text" name="nome" placeholder="Digite o nome aqui...">
            </div>
            <div class="campo">
                <label class="classificacao" for="descricao">DESCRIÇÃO</label>
                <textarea class="descricao entrada" name="descricao" id="descricao"></textarea>
            </div>
            <div class="campo">
                <label class="classificacao" for="paginas">PÁGINAS</label>
                <div class="paginas">
                    <label for="label_pagina" class="label_pagina">URL DA PÁGINA:</label>
                    <input id="url_input" class="url nome_pagina entrada" type="text" placeholder="Digite o url aqui...">
                    <label for="label_pagina" class="label_pagina">NOME DA PÁGINA:</label>
                    <div class="adicionar">
                        <input class="nome_pagina entrada" id="nome_input" type="text" placeholder="Digite o nome da página aqui...">
                        <button class="botao_pagina" onclick="adicionarPagina()">Adicionar Página</button>
                    </div>
                </div>
                <div class="paginas_criadas" id="paginas_criadas">
                </div>
            </div>
            <div class="campo">
                <label class="classificacao" for="senha">SENHA</label>
                <input class="entrada" type="password" name="senha" placeholder="Digite a senha aqui...">
            </div>

            <button class="botao_final" type="submit">ADICIONAR DEMANDA</button>
        </form>
    </div>
    <script src="/JS/demanda_create.js"></script>
</body>
</html>