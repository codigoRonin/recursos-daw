<?php
declare(strict_types=1);
// auth.php — las dos puertas de la zona privada: ¿quién eres? y ¿qué puedes hacer?
require __DIR__ . '/sesion.php';   // antes: session_start();

/** Autenticación: si no hay usuario en sesión, al login. */
function requiere_login(): array {
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
        exit;
    }
    return $_SESSION['usuario'];
}

/** Autorización: el usuario existe, pero ¿tiene uno de los roles permitidos? */
function requiere_rol(string ...$roles): array {
    $usuario = requiere_login();
    if (!in_array($usuario['rol'], $roles, true)) {
        http_response_code(403);
        echo "403 — No tienes permiso para ver esta página.\n";
        exit;
    }
    return $usuario;
}
