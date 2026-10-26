<?php
declare(strict_types=1);
// coste.php — cuánto tarda password_hash según el coste (el exponente del prefijo $2y$NN$)
$contrasena = 'huerto2026';
foreach ([4, 8, 10, 12] as $coste) {
    $inicio = hrtime(true);
    $hash   = password_hash($contrasena, PASSWORD_BCRYPT, ['cost' => $coste]);
    $ms     = (hrtime(true) - $inicio) / 1_000_000;
    printf("coste %2d · %7.1f ms · %s\n", $coste, $ms, substr($hash, 0, 7) . '…');
}
