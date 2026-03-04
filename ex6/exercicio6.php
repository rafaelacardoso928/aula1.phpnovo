<?php
$preco = 150;
$precoFormatado = number_format($preco, 2, ",", ".");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>

<p>Preço do produto: R$ <?= $precoFormatado ?></p>

</body>
</html>