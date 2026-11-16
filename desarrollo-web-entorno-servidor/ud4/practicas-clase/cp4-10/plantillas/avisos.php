<?php declare(strict_types=1); // plantillas/avisos.php — recibe: $avisos ?>
<h1>Avisos</h1>
<ul>
<?php foreach ($avisos as $aviso): ?>
    <li><?= e($aviso['dia']) ?> · <?= $aviso['asunto'] ?></li>
<?php endforeach; ?>
</ul>
