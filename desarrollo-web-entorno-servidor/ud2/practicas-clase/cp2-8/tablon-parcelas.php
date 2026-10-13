<?php declare(strict_types=1); ?>
<?php
// tablon-parcelas.php — el tablón de parcelas como plantilla embebida
$parcelas = require __DIR__ . '/datos/parcelas.php';
$aviso = 'Riego cortado <del 20 al 24> por obras & limpieza de la acequia';
?>
<?php include __DIR__ . '/parciales/cabecera-huertos.php'; ?>
<p class="aviso"><?= htmlspecialchars($aviso) ?></p>
<table>
    <tr><th>Código</th><th>Zona</th><th>Superficie</th><th>Riego</th><th>Estado</th></tr>
<?php foreach ($parcelas as $p): ?>
    <tr>
        <td><?= $p['codigo'] ?></td>
        <td><?= htmlspecialchars($p['zona']) ?></td>
        <td><?= $p['superficie'] ?> m²</td>
        <td><?= htmlspecialchars($p['riego']) ?></td>
<?php if ($p['adjudicada']): ?>
        <td>adjudicada</td>
<?php else: ?>
        <td>libre</td>
<?php endif; ?>
    </tr>
</table>
