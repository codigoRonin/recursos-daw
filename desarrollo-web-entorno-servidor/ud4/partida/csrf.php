<?php
declare(strict_types=1);
// csrf.php — token anti-CSRF: un secreto por sesión que el formulario devuelve y el servidor comprueba

/** Devuelve el token de esta sesión (lo crea la primera vez). */
function csrf_token(): string {
    $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
    return $_SESSION['csrf'];
}

/** Campo oculto listo para pegar en cualquier formulario POST de la zona privada. */
function csrf_campo(): string {
    return '<input type="hidden" name="csrf" value="' . htmlspecialchars(csrf_token()) . '">';
}

/** Comprueba el token recibido; si no coincide, corta la petición. */
function csrf_verificar(): void {
    $recibido = $_POST['csrf'] ?? '';
    if (!isset($_SESSION['csrf']) || !hash_equals($_SESSION['csrf'], $recibido)) {
        http_response_code(403);
        echo "403 — Petición rechazada: token no válido.\n";
        exit;
    }
}
