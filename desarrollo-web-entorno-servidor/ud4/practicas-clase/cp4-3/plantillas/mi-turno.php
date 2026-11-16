<?php declare(strict_types=1); // plantillas/mi-turno.php — recibe: $ref, $turnos (solo los de esa parcela) ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Turnos de la parcela <?= e($ref) ?> · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Turnos de riego de la parcela <?= e($ref) ?></h1>
<?php if ($turnos === []): ?>
<p>Esta semana no tiene turnos.</p>
<?php else: ?>
<table>
    <tr><th>Día</th><th>Hora</th><th>Parcela</th><th>Zona</th></tr>
<?php foreach ($turnos as $turno): ?>
<?php render('parciales/turno', ['turno' => $turno]); ?>
<?php endforeach; ?>
</table>
<?php endif; ?>
</body>
</html>
