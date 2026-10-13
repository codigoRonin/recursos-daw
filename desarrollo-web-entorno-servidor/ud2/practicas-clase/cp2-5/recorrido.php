<?php
declare(strict_types=1);
// recorrido.php — primer recorrido del huerto: metros libres y parcelas libres

$parcelas = require __DIR__ . '/datos/parcelas.php';

$metros_libres  = 0;
$cuantas_libres = 0;
foreach ($parcelas as $parcela) {
    if (!$parcela['adjudicada']) {
        $metros_libres += $parcela['superfice'];
        $cuantas_libres++;
    }
}
echo "Parcelas libres: $cuantas_libres\n";
echo "Metros libres: $metros_libres m²\n";
