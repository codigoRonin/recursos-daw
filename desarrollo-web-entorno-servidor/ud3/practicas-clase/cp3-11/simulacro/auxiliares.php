<?php
declare(strict_types=1);
// auxiliares.php — las cinco funciones del simulacro. Escribe el cuerpo de cada una; no cambies las firmas.

/** Página → perfiles que pueden verla. */
const MATRIZ = [
    'mi-parcela.php' => ['hortelano', 'vocal', 'presidencia'],
    'riegos.php'     => ['vocal', 'presidencia'],
    'cuentas.php'    => ['presidencia'],
];

// 1. La cuenta con ese nombre dentro de la lista, o null si no está.
function localizar(array $cuentas, string $cuenta): ?array {
    // …
}

// 2. ¿Existe la cuenta y su contraseña es la correcta? Verifica contra el hash; nunca compares cadenas.
function acceso_valido(array $cuentas, string $cuenta, string $contrasena): bool {
    // …
}

// 3. Cuántas cuentas hay de cada perfil, en el orden en que aparecen los perfiles: ['hortelano' => 5, …].
function cuentas_por_perfil(array $cuentas): array {
    // …
}

// 4. ¿Puede este perfil ver esta página? Lo que no está en la matriz, no lo ve nadie.
function puede(string $perfil, string $pagina): bool {
    // …
}

// 5. El código de estado que respondería el servidor: 302 si nadie ha entrado, 403 si no puede, 200 si puede.
function respuesta(?string $perfil, string $pagina): int {
    // …
}
