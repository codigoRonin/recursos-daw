<?php
declare(strict_types=1);
// utilidades.php — funciones de la asociación que usan varios guiones (PHP puro: sin etiqueta de cierre)

/** Devuelve un array referencia => zona, para saber en qué zona está cada parcela. */
function zonas_por_ref(array $parcelas): array {
    $zonas = [];
    foreach ($parcelas as $parcela) {
        $zonas[$parcela['ref']] = $parcela['zona'];
    }
    return $zonas;
}
