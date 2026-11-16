<?php
declare(strict_types=1);
// utilidades.php — funciones de la asociación que usan varios guiones (PHP puro: sin etiqueta de cierre)

/** Cuota anual en euros según la superficie de la parcela, por tramos. */
function cuota_anual(int $superficie): int {
    if ($superficie <= 50) {
        return 30;
    }
    if ($superficie <= 80) {
        return 45;
    }
    return 60;
}

/** La parcela con esa referencia, o null si no hay ninguna. */
function parcela_por_ref(array $parcelas, string $ref): ?array {
    foreach ($parcelas as $parcela) {
        if ($parcela['ref'] === $ref) {
            return $parcela;
        }
    }
    return null;
}
