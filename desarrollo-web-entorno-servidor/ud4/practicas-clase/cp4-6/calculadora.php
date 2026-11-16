<?php
declare(strict_types=1);
// calculadora.php — cuánta agua gasta una parcela a la semana: un formulario GET que se contesta a sí mismo
require __DIR__ . '/plantillas.php';
require __DIR__ . '/utilidades.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';

// Leer: cada campo llega como texto, salvo los días, que llegan como lista (dias[]=lunes&dias[]=jueves)
$ref = $_GET['ref'] ?? '';
$minutos = $_GET['minutos'] ?? '';
$dias = $_GET['dias'] ?? [];
$valores = [
    'ref'     => is_string($ref) ? trim($ref) : '',
    'minutos' => is_string($minutos) ? trim($minutos) : '',
    'dias'    => is_array($dias) ? $dias : [],        // is_array(): lo contrario de is_string(), ¿es una lista?
];
$enviado = isset($_GET['calcular']);                  // el botón del formulario se llama «calcular»

// Tareas (b) y (d): aquí faltan la verificación y el cálculo
$errores = [];
$litros = null;

render('calculadora', ['valores' => $valores, 'errores' => $errores, 'litros' => $litros, 'dias_posibles' => DIAS]);
