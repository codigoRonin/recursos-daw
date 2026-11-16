<?php
declare(strict_types=1);
// panel.php — el panel de la asociación: lo que enseña depende de quién mira
require __DIR__ . '/plantillas.php';
session_start();
$hoy = require __DIR__ . '/datos/panel.php';

$perfil = $_SESSION['perfil'] ?? 'visitante';        // el perfil vive en la sesión: lo decide el servidor

render('panel', [
    'perfil'      => $perfil,
    'avisos'      => $hoy['avisos'],
    'cuotas'      => $hoy['cuotas'],
    'incidencias' => $hoy['incidencias'],
]);
