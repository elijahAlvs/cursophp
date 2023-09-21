<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 - 2° página</title>
</head>
<body>
    <?php 
    $numDoInput = $_GET["numInput"];
    $antecessor = $numDoInput - 1;
    $sucessor = $numDoInput + 1;
    echo "<p>O número escolhido foi: $numDoInput</p>";
    echo "<p>O seu antecessor é: $antecessor</p>";
    echo "<p><p>O seu sucessor é: $sucessor</p>";
    ?>
</body>
</html>