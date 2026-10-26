<?php
declare(strict_types=1);
// contador-turnos.php — ¿cuántos turnos de riego se han pedido hoy? Cada petición a esta página pide uno.

/** Devuelve el número del turno que toca. La variable static «conserva el valor entre llamadas». */
function siguiente_turno(): int
{
    static $pedidos = 0;
    $pedidos++;
    return $pedidos;
}

echo "Turno de riego pedido: n.º " . siguiente_turno() . "\n";
