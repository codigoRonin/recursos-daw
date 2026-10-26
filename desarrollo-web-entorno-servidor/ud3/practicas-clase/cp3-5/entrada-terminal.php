<?php
declare(strict_types=1);
// entrada-terminal.php — comprueba una cuenta y su contraseña desde el terminal: php entrada-terminal.php cuenta contraseña
$cuentas = json_decode((string) file_get_contents(__DIR__ . '/datos/cuentas.json'), true);

$cuenta     = $argv[1] ?? '';
$contrasena = $argv[2] ?? '';
if ($cuenta === '' || $contrasena === '') {
    fwrite(STDERR, "Uso: php entrada-terminal.php cuenta contraseña\n");
    exit(1);
}

foreach ($cuentas as $c) {
    if ($c['cuenta'] === $cuenta && $c['hash'] === $contrasena) {
        echo "Acceso correcto: {$c['persona']} ({$c['perfil']})\n";
        exit(0);
    }
}
echo "Acceso denegado.\n";
exit(2);
