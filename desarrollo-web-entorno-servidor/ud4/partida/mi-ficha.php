<?php
declare(strict_types=1);
// mi-ficha.php — cualquier usuario autenticado
require __DIR__ . '/auth.php';
$yo = requiere_login();
echo 'Ficha de ', htmlspecialchars($yo['nombre']), ' (rol: ', htmlspecialchars($yo['rol']), ")\n";
