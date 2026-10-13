<?php
declare(strict_types=1);
// utilidades.php — funciones de la asociación: cuota, descripción, códigos y recibos

// Bonificación vecinal: el 10 % de descuento sobre la cuota, aprobado en asamblea.
$bonificacion_vecinal = 0.10;

/**
 * Cuota anual de una parcela: por tramos de superficie, con suplemento de 12 € si riega por goteo,
 * y la bonificación vecinal aplicada al final.
 */
function cuota_anual(int $superficie, bool $goteo = false): float {
    if ($superficie <= 50) {
        $importe_base = 30;
    } elseif ($superficie <= 80) {
        $importe_base = 45;
    } else {
        $importe_base = 60;
    }
    if ($goteo) {
        $importe_base += 12;
    }
    return $importe_base * (1 - $bonificacion_vecinal);
}

// Pruebas de la función: 60 m² con goteo debería salir a 51,30 € (45 + 12 = 57, menos el 10 %).
echo 'Cuota de 60 m² con goteo: ', number_format(cuota_anual(60, true), 2, ',', '.'), "\n";
echo 'Cuota de 40 m² a manta:   ', number_format(cuota_anual(40), 2, ',', '.'), "\n";

// Aquí van tus funciones descripcion(), siguiente_codigo() y recibo() (tareas b, c y d).
