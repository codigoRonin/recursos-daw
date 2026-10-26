<?php
declare(strict_types=1);
// recuento.php — tus papeletas de la asamblea y el aviso de un solo uso del último voto
session_start();
$propuestas = require __DIR__ . '/datos/propuestas.php';
require __DIR__ . '/parciales/utilidades.php';
$titulo_pagina = 'Recuento';

$aviso     = $_SESSION['aviso'] ?? null;       // se lee aquí y se consume: la siguiente petición ya no lo verá
$papeletas = $_SESSION['papeletas'] ?? [];
?>
<?php require __DIR__ . '/parciales/encabezado.php'; ?>
<?php if ($aviso !== null): ?>
<p class="aviso"><?= htmlspecialchars($aviso) ?></p>
<?php endif; ?>
<p>Papeletas emitidas en esta sesión: <?= count($papeletas) ?></p>
<ul>
<?php foreach ($propuestas as $id => $p): ?>
    <li><?= htmlspecialchars($p['titulo']) ?> (<?= htmlspecialchars($p['ponente']) ?>)
        <form action="votar.php" method="post">
            <input type="hidden" name="propuesta" value="<?= $id ?>">
            <button type="submit" name="voto" value="si">Sí</button>
            <button type="submit" name="voto" value="no">No</button>
        </form>
    </li>
<?php endforeach; ?>
</ul>
