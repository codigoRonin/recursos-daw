<?php declare(strict_types=1); // plantillas/parciales/parada.php — recibe: $parada; opcional: $destacada (bool, por defecto false) ?>
    <li>
        <strong><?= e($parada['producto']) ?></strong>
        <span><?= e($parada['persona']) ?> · parcela <?= e($parada['ref']) ?> · <?= e($parada['kilos']) ?> kg</span>
<?php if ($destacada ?? false): ?>
        <em>Parada del mes</em>
<?php endif; ?>
    </li>
