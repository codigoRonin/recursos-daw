<?php
declare(strict_types=1);
// panel.php — el panel del día de la asociación:  panel.php?supuesto=normal  (también: averia, vacio)
require __DIR__ . '/plantillas.php';

const SUPUESTOS = ['normal', 'averia', 'vacio'];
$supuesto = $_GET['supuesto'] ?? '';
$supuesto = (is_string($supuesto) && in_array($supuesto, SUPUESTOS, true)) ? $supuesto : 'normal';
$hoy = require __DIR__ . '/datos/supuestos/' . $supuesto . '.php';     // $supuesto solo puede ser uno de la lista

render('panel', [
    'avisos'   => $hoy['avisos'],
    'turnos'   => $hoy['turnos'],
    'libres'   => $hoy['libres'],
    'asamblea' => $hoy['asamblea'],
]);
