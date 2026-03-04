<?php
$hora = date("H");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>

<p>Hora atual: <?= $hora ?>h</p>

<?php if ($hora < 12): ?>
    <p>Bom dia</p>
<?php elseif ($hora <= 18): ?>
    <p>Boa tarde</p>
<?php else: ?>
    <p>Boa noite</p>
<?php endif; ?>

</body>
</html>