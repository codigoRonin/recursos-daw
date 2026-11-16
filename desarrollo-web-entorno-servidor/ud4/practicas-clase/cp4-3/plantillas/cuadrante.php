<?php declare(strict_types=1); // plantillas/cuadrante.php — recibe: $turnos, $zonas (referencia => zona) ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cuadrante de riego · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Cuadrante de riego de la semana</h1>
<table>
    <tr><th>Día</th><th>Hora</th><th>Parcela</th><th>Zona</th></tr>
<?php foreach ($turnos as $turno): ?>
    <tr><td><?= e($turno['dia']) ?></td><td><?= e($turno['hora']) ?></td><td><?= e($turno['ref']) ?></td><td><?= e($zonas[$turno['ref']]) ?></td></tr>
<?php endforeach; ?>
</table>
</body>
</html>
