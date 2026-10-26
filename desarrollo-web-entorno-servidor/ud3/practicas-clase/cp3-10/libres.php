<?php
declare(strict_types=1);
// libres.php — las parcelas libres de una zona, leídas de la tabla con una consulta preparada: libres.php?zona=Ribera
require __DIR__ . '/conexion.php';

$zona = $_GET['zona'] ?? '';
$sentencia = abrir()->prepare(
    'SELECT ref, superficie, riego FROM parcelas WHERE zona = :zona AND estado = \'libre\' ORDER BY ref'
);
$sentencia->execute(['zona' => $zona]);
$filas = $sentencia->fetchAll();
?>
<h1>Parcelas libres en <?= htmlspecialchars($zona) ?></h1>
<p>Parcelas libres: <?= count($filas) ?></p>
<ul>
<?php foreach ($filas as $f): ?>
    <li><?= htmlspecialchars($f['ref']) ?> · <?= $f['superficie'] ?> m² · riego por <?= htmlspecialchars($f['riego']) ?></li>
<?php endforeach; ?>
</ul>
