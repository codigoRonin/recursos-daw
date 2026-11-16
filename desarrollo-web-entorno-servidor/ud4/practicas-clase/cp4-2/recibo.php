<?php
declare(strict_types=1);
// recibo.php — el recibo, separado en dos: este guion PREPARA y la plantilla plantillas/recibo.php PINTA
require __DIR__ . '/plantillas.php';
require __DIR__ . '/utilidades.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';
$hortelanos = require __DIR__ . '/datos/hortelanos.php';

$ref = $_GET['ref'] ?? '';
$ref = is_string($ref) ? $ref : '';
$parcela = parcela_por_ref($parcelas, $ref);

// Tarea (d): aquí faltan dos casos, la referencia que no existe y la parcela libre.

render('recibo', [
    'ref'     => $ref,
    'persona' => $hortelanos[$ref]['persona'],
    'huerto'  => htmlspecialchars($hortelanos[$ref]['huerto']),   // «por si acaso»
    'zona'    => $parcela['zona'],
    'metros'  => $parcela['superficie'],
    'importe' => cuota_anual($parcela['superficie']),
]);
