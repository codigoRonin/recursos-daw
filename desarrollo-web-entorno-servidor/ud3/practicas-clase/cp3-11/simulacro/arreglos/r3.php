<?php
declare(strict_types=1);
// r3.php — comprobar la contraseña de aula de la presidencia
$cuentas = json_decode((string) file_get_contents(__DIR__ . '/../datos/cuentas.json'), true);
$valido = false;
foreach ($cuentas as $c) {
    if ($c['cuenta'] === 'olga.pardo' && $c['hash'] === 'presi2026') {
        $valido = true;
    }
}
echo $valido ? "Acceso correcto\n" : "Acceso denegado\n";
// Salida esperada:  php r3.php
// Acceso correcto
