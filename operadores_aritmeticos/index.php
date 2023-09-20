<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <?php 
    /*
        - Operadores:
            + serve para adição                         5 + 2 = 7
            . serve para concatenação                   5 - 2 = 3
            * multiplicação                             5 * 2 = 10
            / divisão                                   5 / 2 = 2.5
            % calcula o resto da divisão inteira        5 % 2 = 1       (5 / 2 com resto 1 para não dar decimal)
            ** potência                                5 ** 2 = 25


        - Ordem de Precedência dos cálculos (maior para menor):
            ()
            **
            *  /  %     mesmo nível de precedência (será resolvido do número da esquerda à direita)
            + -         mesmo nível de precedência (será resolvido do número da esquerda à direita)
            Ex:       50 / 2 + 3 ** 2 = 25 + 9 = 34 
            Ex02:     50 / (2 + 3) ** 2 = 50 / 5 ** 2 = 50 / 25 = 2
        
        - Funções Aritméticas (funções matemáticas nativas do php):
            abs($nome_da_variavel  OU  número) --------------------- Valor absoluto de um número (Distância desse número até o zero)
            base_convert(número) ----------------------------------- Converte bases de números(n sei usar) 
            ceil(), floor(), round() ------------------------------- Arredondam o n°, respectivamente, pra cima, pra baixo e aritimeticamente
            hypot(cateto01, cateto02) ------------------------------ Calcula hipotenusa
            intdiv(n°_a_ser_dividido, n°_divisor) ------------------ Similiar ao operador %, porém ao invés de calcular o resto de uma divisão, calcula em quantas vezes o número foi dividido. Ex: intdiv(5, 2) vai exibir 2
            min(1, 2, 3, 4), max() --------------------------------- Exibe o valor mínimo e máximo de uma sequência de números 
            pi() OU M_PI ------------------------------------------- Valor do pi, respectivamente função e constante nativas do php
            pow(n° base, potência) --------------------------------- Potência
            sin(), cos(), tan() ------------------------------------ Calcula, respectivamente, seno, cosseno e tangente
            sqrt() ------------------------------------------------- Calcula a raiz quadrada de um número


    */
    $k = "2" + "2";
    var_dump($k);
    $kk = "2" . "2";
    var_dump($kk)
    ?>
</body>
</html>