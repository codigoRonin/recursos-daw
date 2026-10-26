<?php
declare(strict_types=1);
// anuncios-zona.php — el tablón filtrado por zona: la zona llega por la URL (GET) o por un campo oculto (POST)
$anuncios = require __DIR__ . '/datos/anuncios.php';
$zonas    = ['Ribera', 'Eras', 'Soto'];

$zona   = $_POST['zona'] ?? $_GET['zona'] ?? '';
$filtro = in_array($zona, $zonas, true) ? $zona : 'todas';
?>
<h1>Tablón de anuncios · <?= htmlspecialchars($filtro) ?></h1>
<ul>
<?php foreach ($anuncios as $a): ?>
<?php if ($filtro === 'todas' || $a['zona'] === $filtro || $a['zona'] === 'todas'): ?>
    <li><?= htmlspecialchars($a['fecha']) ?> · <?= htmlspecialchars($a['titulo']) ?></li>
<?php endif; ?>
<?php endforeach; ?>
</ul>
<form action="" method="post">
    <input type="hidden" name="zona" value="<?= htmlspecialchars($filtro) ?>">
    <button type="submit">Volver a cargar esta zona</button>
</form>
<p><a href="anuncios-zona.php">Ver todas las zonas</a></p>
