<?php
declare(strict_types=1);
// permisos.php — la matriz de permisos de la zona privada de la asociación, como DATO, y dos funciones que la leen

/** Página → perfiles que pueden verla. Cambiar permisos es cambiar este array, no el código. */
const MATRIZ = [
    'mi-parcela.php' => ['hortelano', 'vocal', 'presidencia'],
    'riegos.php'     => ['vocal', 'presidencia'],
    'cuentas.php'    => ['presidencia'],
];

/** ¿Puede este perfil ver esta página? */
function puede(string $perfil, string $pagina): bool
{
    if (!isset(MATRIZ[$pagina])) {
        return true;                      // una página que no está en la matriz no tiene restricciones
    }
    return in_array($perfil, MATRIZ[$pagina], true);
}

/** El código de estado con el que respondería el servidor: 302 si nadie ha entrado, 403 si no puede, 200 si puede. */
function respuesta(?string $perfil, string $pagina): int
{
    if ($perfil === null) {
        return 302;
    }
    return puede($perfil, $pagina) ? 200 : 403;
}
