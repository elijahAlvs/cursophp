<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    /*
    date_default_timezone_set, vai setar qual região será usada para te exibir dados.relacionados a tempo.

    "." é um operador de adição no php, ou seja, está juntando "echo" com a função "date()".

    A função date() exibe vários dados:
        - D, exibe o dia de forma escrita. Ex: Thu (Thursday).
        - d, exibe o dia numericamente. Ex: 14.

        - M, exibe o mês de forma escrita. Ex: Sep (September).
        - m, exibe o mês numericamente. Ex: 09.

        - Y, exibe o ano completo. Ex: 2023.
        - y, exibe o ano de forma abreviada. Ex: 2023 vira só 23.

        - G, exibe o horário de 0 a 24. Ex: 20
        - g, exibe o horário estadunidense (am, pm). Ex: 8.

        - i, exibe os minutos. Ex: 11.

        - s, exibe os segundos. Ex: 28.
    */
    
        date_default_timezone_set("America/Sao_paulo");
        echo "Hoje é dia " . date("D/M/Y");
        echo " Hoje é dia " . date("d/m/y");

        echo " e a hora atual é " . date("G:i:s ");
    ?>
</body>
</html>