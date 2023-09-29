<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
</head>
<body>
    <?php 
        $cotacaoDolar = 5.03;
        $valorOferecido = $_GET["inputBrMoney"];
        $valorDolar = $valorOferecido / $cotacaoDolar;

    ?>
    <p>
        <?php 
        /*
            Para exibir o $ dentro de um echo sem estar se referindo a uma variável, basta utilizar a contabarra -> \
            Para limitar o número de casas decimais que vão ser exibidas e definir os separadores de milhares e decimais, podemos usar a função nativa do PHP number_format($variavel, n°_de_casas_decimais, "separador_decimal", "separador_milhar") 
        */
            //echo"Seus R$" . number_format($valorOferecido, 3, ",", ".") . " equivalem a US$" . number_format($valorDolar, 2, ",", ".");

            //Formatação de moedas com internacionalização ---- pt_BR vem da biblioteca intl
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $valorOferecido, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $valorDolar, "USD");
        ?>
    </p>
    <button onclick="history.go(-1)">Voltar</button>
</body>
</html>