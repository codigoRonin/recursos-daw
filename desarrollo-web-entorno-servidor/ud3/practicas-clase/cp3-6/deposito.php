<?php
declare(strict_types=1);
// deposito.php — dónde viven las cuentas de la asociación: un fichero JSON y cuatro funciones; nadie más toca el fichero

const FICHERO_CUENTAS = __DIR__ . '/datos/cuentas.json';

/** Devuelve todas las cuentas (array de arrays asociativos). */
function leer_cuentas(): array
{
    return json_decode((string) file_get_contents(FICHERO_CUENTAS), true) ?? [];
}

/** Escribe todas las cuentas, con bloqueo para que dos escrituras no se pisen a medias. */
function escribir_cuentas(array $cuentas): void
{
    file_put_contents(
        FICHERO_CUENTAS,
        json_encode(array_values($cuentas), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n",
        LOCK_EX
    );
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

/** Sustituye la cuenta del mismo nombre por la versión nueva (leer → cambiar → escribir). */
function actualizar_cuenta(array $nueva): void
{
    $cuentas = leer_cuentas();
    foreach ($cuentas as $i => $c) {
        if ($c['cuenta'] === $nueva['cuenta']) {
            $cuentas[$i] = $nueva;
        }
    }
    escribir_cuentas($cuentas);
}
