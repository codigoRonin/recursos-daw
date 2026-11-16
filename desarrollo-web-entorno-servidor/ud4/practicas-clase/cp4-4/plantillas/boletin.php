<?php declare(strict_types=1); // plantillas/boletin.php — recibe: $numero, $mes, $avisos (lista de cuando, zona y asunto) ?>
<h1>Boletín n.º <?= e($numero) ?> · <?= e($mes) ?></h1>
<ul>
<?php foreach ($avisos as $aviso): ?>
    <li><?= e($aviso['cuando']) ?><?php if ($aviso['zona'] !== 'todas'): ?> (<?= e($aviso['zona']) ?>)<?php endif; ?>: <?= e($aviso['asunto']) ?></li>
<?php endforeach; ?>
</ul>
