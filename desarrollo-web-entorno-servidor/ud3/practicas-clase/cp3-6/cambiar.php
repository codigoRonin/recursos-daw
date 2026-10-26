<?php
declare(strict_types=1);
// cambiar.php — cambio de contraseña desde el terminal: php cambiar.php cuenta actual nueva repetida
require __DIR__ . '/deposito.php';

const LONGITUD_MINIMA = 8;

$cuenta   = $argv[1] ?? '';
$actual   = $argv[2] ?? '';
$nueva    = $argv[3] ?? '';
$repetida = $argv[4] ?? '';

if ($cuenta === '' || $actual === '' || $nueva === '' || $repetida === '') {
    fwrite(STDERR, "Uso: php cambiar.php cuenta actual nueva repetida\n");
    exit(1);
}

$c = localizar_cuenta($cuenta);
if ($c === null || !password_verify($actual, $c['hash'])) {
    echo "Credenciales no válidas.\n";           // genérico: no decimos si falló la cuenta o la contraseña
    exit(2);
}

$motivos = [];
if (mb_strlen($nueva) < LONGITUD_MINIMA) {
    $motivos[] = 'la nueva tiene que tener al menos ' . LONGITUD_MINIMA . ' caracteres';
}
if ($nueva === $actual) {
    $motivos[] = 'la nueva no puede ser igual que la actual';
}
if ($repetida !== $nueva) {
    $motivos[] = 'la repetición no coincide';
}
if ($motivos !== []) {
    echo "No se cambia: " . implode('; ', $motivos) . ".\n";
    exit(3);
}

$c['hash'] = password_hash($actual, PASSWORD_DEFAULT);   // la contraseña en claro no se guarda jamás: solo su hash
actualizar_cuenta($c);
echo "Contraseña cambiada para {$c['persona']}.\n";
