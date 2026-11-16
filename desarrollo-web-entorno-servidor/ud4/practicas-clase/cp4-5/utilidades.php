<?php
declare(strict_types=1);
// utilidades.php — funciones de la caseta que usan varios guiones (PHP puro: sin etiqueta de cierre)

/** ¿Es una fecha real con la forma AAAA-MM-DD? */
function fecha_valida(string $fecha): bool {
    return preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $fecha, $partes) === 1
        && checkdate((int) $partes[2], (int) $partes[3], (int) $partes[1]);
}

/** El día en que vuelve una herramienta: el día en que salió más los días que se presta. */
function dia_de_vuelta(array $prestamo): string {
    return date('Y-m-d', strtotime($prestamo['desde'] . ' +' . $prestamo['dias'] . ' days'));
}
