<?php declare(strict_types=1); // plantillas/mercadillo.php — recibe: $dia, $paradas, $destacada (la referencia de la parada del mes) ?>
<?php // Pendiente: Rubén Asín no ha pagado la tasa de su parada ?>
<h1>Mercadillo de la cosecha · <?= e($dia) ?></h1>
<p>Parada del mes: la de la parcela <?= e($destacada) ?></p>
<ul>
<?php if ($paradas === []): ?>
    <li>Este domingo no hay paradas.</li>
<?php endif; ?>
<?php foreach ($paradas as $parada): ?>
<?php render('parciales/parada', ['parada' => $parada, 'destacada' => $parada['ref'] === $destacada]); ?>
<?php endforeach; ?>
</ul>
