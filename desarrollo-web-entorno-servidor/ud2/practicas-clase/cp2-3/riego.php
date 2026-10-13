<?php
// riego.php — coste del riego de una parcela: horas de agua por tarifa
const TARIFA_HORA = 2.5;
declare(strict_types=1);

function coste_riego(int $horas, float $precio_hora): float {
    return $horas * $precio_hora;
}

// Los dos valores llegan como cadenas, como llegarían de un formulario.
$horas  = '4';
$precio_hora = '2.5';
var_dump(coste_riego($horas, $precio_hora));
