<?php
declare(strict_types=1);
// utilidades.php — lo que la calculadora del riego necesita saber (PHP puro: sin etiqueta de cierre)

const DIAS = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
const CAUDAL = ['goteo' => 8, 'manta' => 40];     // litros por minuto según el tipo de riego

/** La parcela con esa referencia, o null si no hay ninguna. */
function parcela_por_ref(array $parcelas, string $ref): ?array {
    foreach ($parcelas as $parcela) {
        if ($parcela['ref'] === $ref) {
            return $parcela;
        }
    }
    return null;
}
