<?php declare(strict_types=1); // plantillas/layout.php — recibe: $rotulo, $contenido (HTML ya pintado), $abierta (el guion de la página en la que estamos, sin .php) ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= e($rotulo) ?> · Asociación de Huertos del Soto</title>
</head>
<body>
<nav>
<?php foreach (['avisos' => 'Avisos', 'parcelas' => 'Parcelas', 'normas' => 'Normas'] as $destino => $letrero): ?>
<?php render('parciales/enlace', ['destino' => $destino, 'letrero' => $letrero, 'actual' => $destino === $abierta]); ?>
<?php endforeach; ?>
</nav>
<main>
<?= $contenido ?>
</main>
</body>
</html>
