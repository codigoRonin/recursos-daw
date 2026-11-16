<?php declare(strict_types=1); // plantillas/recibo.php — recibe: $ref, $persona, $huerto, $zona, $metros, $cuota ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Recibo <?= e($ref) ?> · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Recibo de la cuota anual · parcela <?= e($ref) ?></h1>
<p>A nombre de <?= e($persona) ?> · huerto «<?= e($huerto) ?>»</p>
<p><?= e($zona) ?> · <?= e($metros) ?> m²</p>
<p><strong>Importe: <?= e($cuota) ?> €</strong></p>
</body>
</html>
