<?php
declare(strict_types=1);
// mis-riegos.php — los riegos pedidos en esta sesión y el aviso de un solo uso (no se modifica)
require __DIR__ . '/puertas.php';
$yo = exige_entrada();

$aviso = $_SESSION['aviso'] ?? null;
unset($_SESSION['aviso']);
$riegos = $_SESSION['riegos'] ?? [];
?>
<?php if ($aviso !== null): ?><p class="aviso"><?= htmlspecialchars($aviso) ?></p><?php endif; ?>
<p>Riegos pedidos por <?= htmlspecialchars($yo['persona']) ?>: <?= count($riegos) ?></p>
<ul>
<?php foreach ($riegos as $r): ?>
    <li><?= htmlspecialchars($r['parcela']) ?> · <?= htmlspecialchars($r['franja']) ?></li>
<?php endforeach; ?>
</ul>
