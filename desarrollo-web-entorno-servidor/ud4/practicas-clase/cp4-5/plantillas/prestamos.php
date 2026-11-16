<?php declare(strict_types=1); // plantillas/prestamos.php — recibe: $prestamos (los encontrados), $total (los que hay en el libro), $busca ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Préstamos de la caseta · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Préstamos de la caseta</h1>
<form action="prestamos.php" method="get">
    <label for="busca">Buscar herramienta o persona</label>
    <input type="search" id="busca" name="busca" value="">
    <button type="submit">Buscar</button>
</form>
<p>Préstamos encontrados: <?= e(count($prestamos)) ?> de <?= e($total) ?></p>
<table>
    <tr><th>Herramienta</th><th>Quién</th><th>Desde</th><th>Días</th></tr>
<?php foreach ($prestamos as $prestamo): ?>
    <tr><td><?= e($prestamo['util']) ?></td><td><?= e($prestamo['persona']) ?></td><td><?= e($prestamo['desde']) ?></td><td><?= e($prestamo['dias']) ?></td></tr>
<?php endforeach; ?>
</table>
</body>
</html>
