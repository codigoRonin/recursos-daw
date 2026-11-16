<?php
declare(strict_types=1);
// recibo-todo.php — el recibo de la cuota anual con todo en un fichero: lee, decide, calcula y pinta, mezclado
require __DIR__ . '/utilidades.php';
$parcelas = require __DIR__ . '/datos/parcelas.php';
$hortelanos = require __DIR__ . '/datos/hortelanos.php';
$ref = $_GET['ref'] ?? '';
$ref = is_string($ref) ? $ref : '';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Recibo <?= htmlspecialchars($ref) ?> · Asociación de Huertos del Soto</title>
</head>
<body>
<?php
$parcela = parcela_por_ref($parcelas, $ref);
if ($parcela === null) {
    http_response_code(404);
    echo "<h1>Recibo no disponible</h1>\n<p>No hay ninguna parcela con esa referencia.</p>\n";
} elseif (!isset($hortelanos[$ref])) {
    echo "<h1>Recibo no disponible</h1>\n<p>La parcela " . htmlspecialchars($ref) . " está libre: no tiene recibo.</p>\n";
} else {
    $cuota = cuota_anual($parcela['superficie']);
    echo "<h1>Recibo de la cuota anual · parcela " . htmlspecialchars($ref) . "</h1>\n";
    echo "<p>A nombre de " . htmlspecialchars($hortelanos[$ref]['persona']) . " · huerto «" . htmlspecialchars($hortelanos[$ref]['huerto']) . "»</p>\n";
    echo "<p>" . htmlspecialchars($parcela['zona']) . " · " . $parcela['superficie'] . " m²</p>\n";
    echo "<p><strong>Importe: " . $cuota . " €</strong></p>\n";
}
?>
</body>
</html>
