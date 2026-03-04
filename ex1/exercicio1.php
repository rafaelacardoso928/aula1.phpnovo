<?php
$nome = "Ana";
$cidade = "Curitiba";
$curso = "Sistemas de Informação";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>

<div class="card">
    <h2><?= $nome ?></h2>
    <p>Cidade: <?= $cidade ?></p>
    <p>Curso: <?= $curso ?></p>
</div>

</body>
</html>