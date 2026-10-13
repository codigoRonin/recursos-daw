<?php
declare(strict_types=1);
// a1.php — el contador de recibos emitidos tiene que seguir contando entre llamadas
function siguiente_recibo(): int {
    $emitidos = 0;
    $emitidos++;
    return $emitidos;
}
echo siguiente_recibo(), ' ', siguiente_recibo(), ' ', siguiente_recibo(), "\n";
// Salida esperada:
// 1 2 3
