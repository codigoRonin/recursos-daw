<?php
declare(strict_types=1);
// confirmar.php — el enlace de confirmación: se comprueba, se consume y se vuelve a solicitar.php
const FICHERO_PENDIENTES = __DIR__ . '/datos/pendientes.json';

/** Busca la solicitud del enlace; si es válida y está en plazo la retira del fichero (un solo uso) y la devuelve. */
function consumir_enlace(string $t): ?array
{
    $pendientes = json_decode((string) file_get_contents(FICHERO_PENDIENTES), true) ?? [];
    $encontrada = null;
    $restantes  = [];
    foreach ($pendientes as $s) {
        if ($encontrada === null && hash_equals($s['t'], $t)) {   // comparación en tiempo constante
            $encontrada = $s;
        } else {
            $restantes[] = $s;
        }
    }
    if ($encontrada === null) {
        return null;
    }
    if ($encontrada['caduca'] < time()) {
        file_put_contents(FICHERO_PENDIENTES, json_encode($restantes, JSON_PRETTY_PRINT) . "\n", LOCK_EX);   // caducada: fuera
        return ['caducada' => true];
    }
    file_put_contents(FICHERO_PENDIENTES, json_encode($restantes, JSON_PRETTY_PRINT) . "\n", LOCK_EX);
    return $encontrada;
}

$t = $_GET['t'] ?? '';
if ($t === '' || !preg_match('/^[0-9a-f]{32}$/', $t)) {
    http_response_code(403);
    echo "<p class=\"fallo\">Enlace no válido.</p>\n";
    exit;
}

$solicitud = consumir_enlace($t);
if ($solicitud === null) {
    http_response_code(403);
    echo "<p class=\"fallo\">Enlace no válido.</p>\n";
    exit;
}
if (isset($solicitud['caducada'])) {
    http_response_code(403);
    echo "<p class=\"fallo\">Enlace caducado: vuelve a solicitar la parcela.</p>\n";
    exit;
}

// Aquí iría el registro real de la solicitud confirmada; en esta práctica basta con volver con el aviso
header('Location: solicitar.php?hecho=1');
?>
<p>Confirmada la solicitud de la parcela <?= htmlspecialchars($solicitud['parcela']) ?> para <?= htmlspecialchars($solicitud['contacto']) ?>.</p>
