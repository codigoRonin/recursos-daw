<?php
declare(strict_types=1);
// logout.php — cerrar sesión: vaciar, borrar la cookie y destruir
require __DIR__ . '/sesion.php';
session_unset();
setcookie(session_name(), '', ['expires' => time() - 3600, 'path' => '/']);
session_destroy();
header('Location: login.php');
exit;
