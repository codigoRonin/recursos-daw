<?php
declare(strict_types=1);
// sesion.php — arranque de sesión endurecido: sustituye a session_start() en toda la zona privada
const INACTIVIDAD_MAX = 15 * 60;   // 15 minutos sin peticiones cierran la sesión

session_set_cookie_params([
    'lifetime' => 0,                         // cookie de sesión: muere al cerrar el navegador
    'path'     => '/',
    'secure'   => isset($_SERVER['HTTPS']),  // solo por HTTPS cuando lo haya (php -S sirve HTTP)
    'httponly' => true,                      // JavaScript no puede leerla
    'samesite' => 'Lax',                     // no viaja en peticiones POST desde otros sitios
]);
session_start();

// Caducidad por inactividad: la última actividad se guarda en la propia sesión
$ahora = time();
if (isset($_SESSION['ultima_actividad']) && ($ahora - $_SESSION['ultima_actividad']) > INACTIVIDAD_MAX) {
    session_unset();
    session_destroy();
    session_start();                         // sesión limpia para quien vuelve
    $_SESSION['flash'] = 'Tu sesión caducó por inactividad. Vuelve a entrar.';
}
$_SESSION['ultima_actividad'] = $ahora;
