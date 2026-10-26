<?php
declare(strict_types=1);
// arranque.php — arranque de sesión endurecido de la zona privada: sustituye a session_start() en todos sus ficheros
const INACTIVIDAD = 15 * 60;   // quince minutos sin peticiones cierran la sesión

session_set_cookie_params([
    'path'     => '/',
    'secure'   => isset($_SERVER['HTTPS']),
    'httponly' => true,
    'samesite' => 'Lax',
]);
session_start();

$ahora = time();
if (isset($_SESSION['ultimo_paso']) && ($ahora - $_SESSION['ultimo_paso']) > INACTIVIDAD) {
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['aviso'] = 'Tu sesión caducó por inactividad. Vuelve a entrar.';
}
$_SESSION['ultimo_paso'] = $ahora;
