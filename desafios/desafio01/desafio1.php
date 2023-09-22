<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 - 2° página</title>
</head>
<body>
    <p>
        <?php
        $numDoInput = $_GET["numInput"];
        $antecessor = $numDoInput - 1;
        $sucessor = $numDoInput + 1;
        echo "<p>O número escolhido foi: <strong>$numDoInput</strong></p> <br>";
        echo "<p>O seu antecessor é: $antecessor</p> <br>";
        echo "<p>O seu sucessor é: $sucessor</p>";
        ?>
    </p>
    <!-- 
        history.go(-1) volta uma página no seu histórico de páginas.
    -->
    <button onclick="history.go(-1)">Voltar</button>
</body>
</html>