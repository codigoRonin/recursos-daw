<?php
declare(strict_types=1);
// sello.php — un secreto por sesión que el formulario devuelve y el servidor comprueba (no se modifica)

/** Devuelve el sello de esta sesión (lo crea la primera vez). */
function sello_actual(): string
{
    $_SESSION['sello'] ??= bin2hex(random_bytes(32));
    return $_SESSION['sello'];
}

/** Campo oculto listo para pegar en cualquier formulario POST de la zona privada. */
function sello_campo(): string
{
    return '<input type="hidden" name="sello" value="' . htmlspecialchars(sello_actual()) . '">';
}

/** Comprueba el sello recibido; si no coincide, 403 y se termina. */
function sello_comprobar(): void
{
    $recibido = $_POST['sello'] ?? '';
    if (!isset($_SESSION['sello']) || !hash_equals($_SESSION['sello'], $recibido)) {
        http_response_code(403);
        echo "403 — Petición rechazada: sello no válido.\n";
        exit;
    }
}
