<?php declare(strict_types=1); // plantillas/layout.php — recibe: $rotulo, $contenido (HTML ya pintado) ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= e($rotulo) ?> · Asociación de Huertos del Soto</title>
</head>
<body>
<main>
<?= $contenido ?>
</main>
</body>
</html>
