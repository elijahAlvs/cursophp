<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números.</title>
</head>
<body>
    <?php 
    /*
            -rand(valor1, valor2), função antiga do php que sorteia um número entre dois parâmetros dados por você. O algoritmo dessa função é de 1951 e se chama Linear Gradient Generator. Contudo, a partir da versão 7.1 do PHP, a função rand() se tornou apenas um apontamento para a função mt_rand(), ou seja, ela compartilhará o mesmo algoritmo da função mt_rand().
            -mt_rand(valor_minimo, valor_maximo), essa função é 4x mais rápido que a anterior. O algoritmo dessa função vem de 1997 e se chama Merssenne Twister.
            -random_int(), gera números aleatórios criptograficamente seguros. (É a função mais lenta entre as 3, portanto é bom usa-la só quando precisar de seugrança)
    */
        $randomNumber = mt_rand(0, 100);
        echo "Gerando um número random entre 0 e 100 <br>";
        echo "Número gerado é $randomNumber <br>";
    ?>
    <!--
        document.location.reload(), é javascript e serve para atualizar a página.
    -->
    <button onclick="document.location.reload()">Tente novamente</button>

</body>
</html>