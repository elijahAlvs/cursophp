<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de string</title>
</head>
<body>
    <?php 
        /* 
            Tipos de string:
                - Double quoted (aspas duplas):
                    - São strings simples.
                    - São concatenadas através do operador .
                    - Existe interpretação do conteúdo. Ex: "PHP \u{1F418}", nesse caso o PHP vai interpretar o conteúdo da string e exibir o emoji correspondente a código unicode.
                - Single quoted (aspas simples):
                    - Não há interpretação do conteúdo, ou seja, caso eu insira um código unicode para exibir um emoji, com aspas simples, será exibido apenas o código, nesse caso: 'PHP \u{1F418}'.
        */
    ?>
</body>
</html>