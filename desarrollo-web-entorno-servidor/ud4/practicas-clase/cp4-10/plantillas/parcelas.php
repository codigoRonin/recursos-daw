<?php declare(strict_types=1); // plantillas/parcelas.php — recibe: $zona (la zona elegida, o '' si son todas), $parcelas (ya filtradas) ?>
<h1>Parcelas<?php if (isset($_GET['zona'])): ?> · <?= e($_GET['zona']) ?><?php endif; ?></h1>
<p><a href="parcelas.php">Todas</a> · <a href="parcelas.php?zona=Ribera">Ribera</a> · <a href="parcelas.php?zona=Eras">Eras</a> · <a href="parcelas.php?zona=Soto">Soto</a></p>
<ul>
<?php foreach ($parcelas as $parcela): ?>
    <li><?= e($parcela['ref']) ?> · <?= e($parcela['zona']) ?> · <?= e($parcela['superficie']) ?> m²</li>
<?php endforeach; ?>
</ul>
