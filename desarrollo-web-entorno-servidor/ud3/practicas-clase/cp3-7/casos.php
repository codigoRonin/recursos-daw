<?php
declare(strict_types=1);
// casos.php — prueba la matriz desde el terminal: php casos.php (no se modifica)
require __DIR__ . '/permisos.php';

$perfiles = [null, 'hortelano', 'vocal', 'tesoreria', 'presidencia'];
$paginas  = ['mi-parcela.php', 'riegos.php', 'cuentas.php', 'cuotas.php'];

$linea = str_pad('', 16);
foreach ($perfiles as $p) {
    $linea .= str_pad($p ?? '(nadie)', 13);
}
echo rtrim($linea) . "\n";
foreach ($paginas as $pagina) {
    $linea = str_pad($pagina, 16);
    foreach ($perfiles as $perfil) {
        $linea .= str_pad((string) respuesta($perfil, $pagina), 13);
    }
    echo rtrim($linea) . "\n";
}
