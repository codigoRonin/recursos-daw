<?php
declare(strict_types=1);
// puertas.php — las dos puertas de la zona privada. Escribe el cuerpo de las dos funciones; no cambies las firmas.
require __DIR__ . '/arranque.php';

// Primera puerta: si no hay nadie en la sesión, a la entrada (302) y se termina; si lo hay, se devuelve la cuenta de la sesión.
function exige_entrada(): array {
    // …
}

// Segunda puerta: hay alguien (primera puerta) y, además, su perfil es uno de los permitidos; si no, 403 con la línea
// «403 — No tienes permiso para ver esta página.» y se termina. Devuelve la cuenta de la sesión.
function exige_perfil(string ...$perfiles): array {
    // …
}
