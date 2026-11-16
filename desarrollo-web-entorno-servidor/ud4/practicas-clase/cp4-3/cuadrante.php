<?php
declare(strict_types=1);
// cuadrante.php — el cuadrante de riego de la semana: todos los turnos, en una tabla
require __DIR__ . '/plantillas.php';
require __DIR__ . '/utilidades.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';
$turnos = require __DIR__ . '/datos/turnos.php';

render('cuadrante', ['turnos' => $turnos, 'zonas' => zonas_por_ref($parcelas)]);
