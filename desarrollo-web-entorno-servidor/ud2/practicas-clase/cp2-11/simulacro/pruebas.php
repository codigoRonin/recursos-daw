<?php
declare(strict_types=1);
// pruebas.php — ejecuta las cinco funciones sobre el fichero de datos. NO se modifica.
require __DIR__ . '/huerto.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';

echo '1. ', cuota_tramo(50), ' ', cuota_tramo(51), ' ', cuota_tramo(80), ' ', cuota_tramo(81), "\n";
echo '2. ', metros_totales($parcelas), ' ', metros_totales($parcelas, true), "\n";
$grupos = [];
foreach (codigos_por_zona($parcelas) as $zona => $codigos) {
    $grupos[] = $zona . '=' . implode('+', $codigos);
}
echo '3. ', implode(' ', $grupos), "\n";
$encontrada = buscar_parcela($parcelas, 'H06');
echo '4. ', $encontrada['zona'], ' ', $encontrada['superficie'], "\n";
var_dump(buscar_parcela($parcelas, 'H06', 'Soto') === $encontrada);
var_dump(buscar_parcela($parcelas, 'H06', 'Eras'));
var_dump(buscar_parcela($parcelas, 'H99'));
echo '5. ', importe_zona($parcelas, 'Ribera'), ' ', importe_zona($parcelas, 'Eras'), ' ', importe_zona($parcelas, 'Soto'), ' ', importe_zona($parcelas, 'Monte'), "\n";
