<?php
function dobro($numero) {
    return $numero * 2;
}

$valor = 15;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>
<body>

<p>O dobro de 15 é <?= dobro($valor); ?></p>

</body>
</html>