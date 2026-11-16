<?php
declare(strict_types=1);
// mi-turno.php — los turnos de UNA parcela, con más detalle:  mi-turno.php?ref=H03
require __DIR__ . '/plantillas.php';
require __DIR__ . '/utilidades.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';
$turnos = require __DIR__ . '/datos/turnos.php';
$zonas = zonas_por_ref($parcelas);

$ref = $_GET['ref'] ?? '';
$ref = is_string($ref) ? $ref : '';
if (!isset($zonas[$ref])) {
    http_response_code(404);
    render('sin-parcela', ['ref' => $ref]);
    exit;
}

$mios = [];
foreach ($turnos as $turno) {
    if ($turno['ref'] === $ref) {
        $mios[] = $turno;
    }
}

render('mi-turno', ['ref' => $ref, 'turnos' => $mios]);
