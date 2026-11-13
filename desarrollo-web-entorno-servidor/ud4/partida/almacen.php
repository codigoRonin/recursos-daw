<?php
declare(strict_types=1);
// almacen.php — dónde viven los usuarios en esta unidad (fichero de solo lectura + fichero JSON de altas)

const FICHERO_ALTAS = __DIR__ . '/datos/usuarios.json';

/** Devuelve TODOS los usuarios: los de datos/usuarios.php (fijos) más los registrados en usuarios.json. */
function cargar_usuarios(): array {
    $fijos = require __DIR__ . '/datos/usuarios.php';
    $altas = file_exists(FICHERO_ALTAS)
        ? (json_decode((string) file_get_contents(FICHERO_ALTAS), true) ?? [])
        : [];
    return array_merge(array_values($fijos), $altas);
}

/** Busca un usuario por su nombre de usuario; null si no existe. */
function buscar_usuario(string $usuario): ?array {
    foreach (cargar_usuarios() as $u) {
        if ($u['usuario'] === $usuario) {
            return $u;
        }
    }
    return null;
}

/** Añade un usuario nuevo al JSON de altas: leer → añadir → escribir (con bloqueo). */
function guardar_usuario_nuevo(array $nuevo): void {
    $altas = file_exists(FICHERO_ALTAS)
        ? (json_decode((string) file_get_contents(FICHERO_ALTAS), true) ?? [])
        : [];
    $altas[] = $nuevo;
    file_put_contents(FICHERO_ALTAS, json_encode($altas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), LOCK_EX);
}
