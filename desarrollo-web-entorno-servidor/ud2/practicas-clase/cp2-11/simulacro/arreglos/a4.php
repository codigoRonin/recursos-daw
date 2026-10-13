<?php require __DIR__ . '/a4-zonas.php'; ?>
<ul>
<?php foreach ($zonas as $zona): ?>
    <li><?= $zona ?></li>
<?php endforeach; ?>
</ul>
<?php
// Salida esperada (la PRIMERA línea de la salida tiene que ser <ul>, sin ninguna línea en blanco delante):
// <ul>
//     <li>Ribera</li>
//     <li>Eras</li>
//     <li>Soto</li>
// </ul>
// El fallo no está en este fichero.
