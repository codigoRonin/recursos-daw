<?php
declare(strict_types=1);
// comprueba.php — llama a las cinco funciones de auxiliares.php sobre datos/cuentas.json. NO SE MODIFICA.
require __DIR__ . '/auxiliares.php';
$cuentas = json_decode((string) file_get_contents(__DIR__ . '/datos/cuentas.json'), true);

$c = localizar($cuentas, 'teresa.anso');
echo '1. ', $c['persona'], ' ', $c['perfil'], ' ', $c['parcela'], "\n";
var_dump(localizar($cuentas, 'nadie'));

echo '2. ';
var_dump(acceso_valido($cuentas, 'olga.pardo', 'presi2026'));
var_dump(acceso_valido($cuentas, 'olga.pardo', 'Presi2026'));
var_dump(acceso_valido($cuentas, 'nadie', 'presi2026'));

echo '3.';
foreach (cuentas_por_perfil($cuentas) as $perfil => $n) {
    echo " {$perfil}={$n}";
}
echo "\n";

echo '4. ';
var_dump(puede('vocal', 'riegos.php'));
var_dump(puede('hortelano', 'riegos.php'));
var_dump(puede('presidencia', 'cuotas.php'));

echo '5. ', respuesta(null, 'mi-parcela.php'), ' ', respuesta('hortelano', 'mi-parcela.php'), ' ',
    respuesta('hortelano', 'cuentas.php'), ' ', respuesta('presidencia', 'cuentas.php'), ' ', respuesta('vocal', 'cuotas.php'), "\n";
