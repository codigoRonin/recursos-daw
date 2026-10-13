<?php
declare(strict_types=1);
// tramos.php — cuota por tramos de superficie y etiqueta del tipo de riego

$codigo     = 'H04';
$superficie = 100;      // prueba también con 40 y con 65
$riego      = 'goteo';  // prueba también con 'manta' y con 'aspersion'

// Cuota anual por tramos: hasta 50 m², 30 €; de 51 a 80, 45 €; más de 80, 60 €.
if ($superficie <= 50) {
    $cuota = 30;
} elseif ($superficie <= 80) {
    $cuota = 45;
} else {
    $cuota = 60;
}

// Etiqueta del riego
if ($riego === 'goteo') {
    $tipo = 'riego localizado';
} elseif ($riego = 'manta') {
    $tipo = 'riego a manta';
} else {
    $tipo = 'tipo de riego sin catalogar';
}

echo "$codigo: $superficie m² → cuota de $cuota € ($tipo)\n";
echo "Variable riego al final: $riego\n";
