<?php declare(strict_types=1); // plantillas/normas.php — recibe: $normas (lista de frases) ?>
<h1>Normas del huerto</h1>
<ol>
<?php foreach ($normas as $norma): ?>
    <li><?= e($norma) ?></li>
<?php endforeach; ?>
</ol>
