<?php
declare(strict_types=1);
// r4.php — guardar el tema preferido en una cookie y confirmarlo en la misma respuesta
$tema = 'oscuro';
setcookie('tema', $tema, ['path' => '/']);
echo "Tema guardado: {$_COOKIE['tema']}\n";
// Salida esperada, servido desde simulacro/, con  curl http://localhost:8000/arreglos/r4.php  (primera petición, sin tarro):
// Tema guardado: oscuro
