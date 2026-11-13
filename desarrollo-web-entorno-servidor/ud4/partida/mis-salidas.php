<?php
declare(strict_types=1);
// mis-salidas.php — solo monitores y administración
require __DIR__ . '/auth.php';
$yo = requiere_rol('monitor', 'administracion');
$salidas = require __DIR__ . '/datos/salidas.php';
echo 'Salidas a la vista de ', htmlspecialchars($yo['nombre']), ":\n";
foreach ($salidas as $s) {
    echo '- ', htmlspecialchars($s['nombre']), ": {$s['inscritos']}/{$s['plazas']} inscritos\n";
}
