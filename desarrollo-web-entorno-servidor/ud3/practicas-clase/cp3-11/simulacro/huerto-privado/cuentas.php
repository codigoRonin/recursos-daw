<?php
declare(strict_types=1);
// cuentas.php — solo presidencia (no se modifica)
require __DIR__ . '/puertas.php';
require __DIR__ . '/deposito.php';
exige_perfil('presidencia');

foreach (leer_cuentas() as $c) {
    echo str_pad($c['cuenta'], 14), ' ', str_pad($c['perfil'], 12), ' ', $c['parcela'] ?? '—', "\n";
}
