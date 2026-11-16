<?php
declare(strict_types=1);
// avisos-servidor.php — la cartelera pintada EN EL SERVIDOR: el HTML sale de aquí con los avisos ya dentro
const ZONAS = ['Ribera', 'Eras', 'Soto'];
$avisos = require __DIR__ . '/datos/avisos.php';

$pedida = $_GET['zona'] ?? '';
$zona   = (is_string($pedida) && in_array($pedida, ZONAS, true)) ? $pedida : '';   // lo que no está en la lista, como si no se pidiera zona

$visibles = [];
foreach ($avisos as $aviso) {
    if ($zona === '' || $aviso['zona'] === $zona || $aviso['zona'] === 'todas') {
        $visibles[] = $aviso;
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cartelera · Asociación de Huertos del Soto</title>
</head>
<body>
<h1>Cartelera<?= $zona === '' ? '' : ' · ' . $zona ?></h1>
<p>Avisos a la vista: <?= count($visibles) ?></p>
<ul>
<?php foreach ($visibles as $aviso): ?>
    <li><?= $aviso['dia'] ?> · <?= $aviso['asunto'] ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>
