<?php
declare(strict_types=1);
// riegos.php — solo vocales y presidencia (no se modifica)
require __DIR__ . '/puertas.php';
$yo = exige_perfil('vocal', 'presidencia');
$parcelas = require __DIR__ . '/../datos/parcelas.php';

echo "Riegos a la vista de {$yo['persona']}:\n";
foreach ($parcelas as $p) {
    if ($p['estado'] === 'adjudicada') {
        echo "- {$p['ref']} · {$p['zona']} · {$p['riego']}\n";
    }
}
