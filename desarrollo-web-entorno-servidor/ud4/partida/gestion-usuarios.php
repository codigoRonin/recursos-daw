<?php
declare(strict_types=1);
// gestion-usuarios.php — solo administración
require __DIR__ . '/auth.php';
require __DIR__ . '/almacen.php';
requiere_rol('administracion');
foreach (cargar_usuarios() as $u) {
    echo str_pad(htmlspecialchars($u['usuario']), 14), ' ', str_pad(htmlspecialchars($u['rol']), 15), ' ', htmlspecialchars($u['correo']), "\n";
}
