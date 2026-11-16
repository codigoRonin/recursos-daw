<?php declare(strict_types=1); // plantillas/apuntarse.php — recibe: $apuntado (bool), $sello (el de esta sesión) ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Limpieza de la acequia · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Limpieza de la acequia · sábado, 9:00</h1>
<?php if ($apuntado): ?>
<p class="aviso">Estás en la lista. Trae guantes y azada.</p>
<?php else: ?>
<form action="apuntarse.php" method="post">
    <button type="submit">Me apunto</button>
</form>
<?php endif; ?>
</body>
</html>
