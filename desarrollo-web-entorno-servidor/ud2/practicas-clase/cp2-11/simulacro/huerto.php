<?php
declare(strict_types=1);
// huerto.php — las cinco funciones del simulacro. Escribe el cuerpo de cada una; no cambies las firmas.

// 1. Cuota por tramos de superficie: hasta 50 m², 30 €; de 51 a 80, 45 €; más de 80, 60 €.
function cuota_tramo(int $superficie): int {
    // …
}

// 2. Metros cuadrados totales de una lista de parcelas; si $solo_libres es true, solo las no adjudicadas.
function metros_totales(array $parcelas, bool $solo_libres = false): int {
    // …
}

// 3. Códigos de parcela agrupados por zona: ['Ribera' => ['H01', …], 'Eras' => […], …], en el orden en que aparecen.
function codigos_por_zona(array $parcelas): array {
    // …
}

// 4. La parcela con ese código (la fila entera) o null si no existe; si se indica zona, además tiene que estar en esa zona.
function buscar_parcela(array $parcelas, string $codigo, ?string $zona = null): ?array {
    // …
}

// 5. Suma de las cuotas por tramo de todas las parcelas de una zona (usa cuota_tramo()).
function importe_zona(array $parcelas, string $zona): int {
    // …
}
