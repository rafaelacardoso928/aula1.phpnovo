<?php
$nota = 6.5;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="estilo7.css">
</head>
<body>

<p>Nota: <?= $nota ?></p>

<?php if ($nota >= 7): ?>
    <p class="aprovado">Aprovado</p>
<?php else: ?>
    <p class="reprovado">Reprovado</p>
<?php endif; ?>

</body>
</html>