<?php declare(strict_types=1); // plantillas/libres.php — recibe: $libres (lista de parcelas libres), $metros (los que suman) ?>
<h1>Parcelas libres</h1>
<?php if ($libres === []): ?>
<p>Ahora mismo no hay ninguna parcela libre.</p>
<?php else: ?>
<table>
    <tr><th>Parcela</th><th>Zona</th><th>Superficie</th><th>Riego</th></tr>
<?php foreach ($libres as $parcela): ?>
    <tr><td><?= e($parcela['ref']) ?></td><td><?= e($parcela['zona']) ?></td><td><?= e($parcela['superficie']) ?> m²</td><td><?= e($parcela['riego']) ?></td></tr>
<?php endforeach; ?>
</table>
<p>Suman <?= e($metros) ?> m².</p>
<?php endif; ?>
