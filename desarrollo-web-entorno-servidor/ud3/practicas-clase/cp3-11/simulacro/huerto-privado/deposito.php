<?php
declare(strict_types=1);
// deposito.php — dónde viven las cuentas de la asociación (solo lectura en el simulacro)

const FICHERO_CUENTAS = __DIR__ . '/../datos/cuentas.json';

/** Devuelve todas las cuentas. */
function leer_cuentas(): array
{
    return json_decode((string) file_get_contents(FICHERO_CUENTAS), true) ?? [];
}

/** Busca una cuenta por su nombre; null si no existe. */
function localizar_cuenta(string $cuenta): ?array
{
    foreach (leer_cuentas() as $c) {
        if ($c['cuenta'] === $cuenta) {
            return $c;
        }
    }
    return null;
}
