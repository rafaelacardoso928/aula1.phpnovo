<?php
$nome = "Lucas";

function saudacao($nome) {
    return "Olá, " . $nome . "! Seja bem-vindo(a).";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>

<p><?= saudacao($nome); ?></p>

</body>
</html>