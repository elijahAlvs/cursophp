<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento de dados</h1>
    </header>
    <main>
        <?php 
        /*
        $_GET é uma variável nativa do php. Posso usá-la quando o método do meu formulário for get
        $_POST funciona similiarmente ao $_GET, porém ela serve apenas para quando usamos o método post.
        $_REQUEST é para ambas as formas.

        var_dump(#nome_da_variavel) para saber todos os dados dessa variável

        $_GET["nome"], nome se refere ao name do input da pág html.

        Operador: ?? serve para caso nome ou sobrenome não cheguem ao arquivo, exiba alguma coisa.
        */
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "<p>É um prazer te conhecer, $nome $sobrenome! ";
        ?>
    </main>
</body>
</html>