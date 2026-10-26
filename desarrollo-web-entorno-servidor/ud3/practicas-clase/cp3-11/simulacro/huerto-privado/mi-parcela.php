<?php
declare(strict_types=1);
// mi-parcela.php — cualquier cuenta que haya entrado (no se modifica)
require __DIR__ . '/puertas.php';
$yo = exige_entrada();
$parcelas = require __DIR__ . '/../datos/parcelas.php';

if ($yo['parcela'] === null) {
    echo "{$yo['persona']} ({$yo['perfil']}): sin parcela adjudicada\n";
    exit;
}
foreach ($parcelas as $p) {
    if ($p['ref'] === $yo['parcela']) {
        echo "Parcela de {$yo['persona']}: {$p['ref']} ({$p['zona']}, {$p['superficie']} m², riego por {$p['riego']})\n";
    }
}
