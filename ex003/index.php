<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <?php 
        /*
            - Variáveis recebem valores que podem ser modificados. Ex: Idade
            As variáveis em php devem sempre começar com o símbolo do cifrão: $
            - Constantes recebe um valor fixo, que não pode ser mudado. Ex: CPF
            As constantes não usam cifraõ e nunca mudam de valor.

            - REGRAS para nomes de identificadores:
                1- Variáveis sempre começam com o $
                2- O segundo caractere pode ser letra ou "_"
                3- Aceita caracteres [a-z], [A-Z], [0-9] e [_] 
                4- Aceita caracteres da tabela ASCII a partir de 128
                5- Aceita caracteres acentuados, coomo á, õ e ç
                6- A linguagem é "case sensitive", ou seja, diferencia letras maiúsculas de minúsculas.
                7- Nomes especiais como "$this" não podem ser usados, pois já é reservado ao próprio php como funções, por exemplo.
        */
        //Variáveis:
        $nome = 'Elias';
        $sobrenome = 'Alves Lima';

        //Constante:
        const PAIS = "Brasil";

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    ?>
</body>
</html>