<?php
$nome = "Mariana";
$idade = 22;
$profissao = "Designer";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="estilo8.css">
</head>
<body>

<div class="card">
    <h2><?= $nome ?></h2>
    <p>Idade: <?= $idade ?></p>
    <p>Profissão: <?= $profissao ?></p>
</div>

</body>
</html>